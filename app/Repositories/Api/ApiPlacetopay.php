<?php

namespace App\Repositories\Api;

use App\Helpers\Funciones;
use App\Models\Orders;

class ApiPlacetopay implements ApiRepository
{
    /**
     * @var $model
     */
    private $model;

    /**
     * EloquentOrder constructor.
     *
     * @param App\Models\Orders $model
     */
    public function __construct(Orders $model)
    {
        $this->model = $model;
    }

    /**
     * Consume servicio de placetopay ApiPlacetopay.
     *
     * @return int id
     */

    public function payload($id)
    {
        $nonce = Funciones::nonce();
        $seed = Funciones::seed();
        $model_order = $this->model->find($id);
        $auth = array(
            'login' => env('LOGIN'),
            'tranKey' => base64_encode(sha1($nonce . $seed . env('TRANKEY'), true)),
            'nonce' => base64_encode($nonce),
            'seed' => $seed,
        );

        $amount = array(
            'currency' => $model_order->currency,
            'total' => $model_order->total,
        );

        $payment = array(
            'reference' => $model_order->reference,
            'description' => $model_order->product_description,
            'amount' => $amount,
            "allowPartial" => false,
        );

        $payload = array(
            "locale" => "es_CO",
            "auth" => $auth,
            "payment" => $payment,
            "expiration" => Funciones::expiration(),
            "returnUrl" => url('/') . "/show/" . base64_encode($id),
            "ipAddress" => Funciones::ip_cliente(),
            "userAgent" => "PlacetoPay Sandbox",

        );

        $result = Funciones::post(env('URL_EVERTEC'), 'redirection/api/session', $payload);

        if ($result->status->status == "OK") {
            $model_order->requestId = $result->requestId;
            $model_order->status = "CREATED";
            $model_order->url_placetopay = $result->processUrl;
            $response = $result->processUrl;
        } else {
            $model_order->status = $result->status->status;
            $response = url('/') . "/error";
            \Log::error($result->status->status . $result->status->message . ' ORDER ID: ' . $id);
        }
        $model_order->date = $result->status->date;
        $model_order->message = $result->status->message;
        $model_order->save();
        return $response;
    }

    /**
     * Consume servicio de placetopay ApiPlacetopay.
     *
     * @return int id
     */

    public function information($id)
    {
        $nonce = Funciones::nonce();
        $seed = Funciones::seed();
        $model_order = $this->model->find($id);
        $auth = array(
            'login' => env('LOGIN'),
            'tranKey' => base64_encode(sha1($nonce . $seed . env('TRANKEY'), true)),
            'nonce' => base64_encode($nonce),
            'seed' => $seed,
        );

        $data = array(
            "auth" => $auth,
        );

        $result = Funciones::post(env('URL_EVERTEC'), 'redirection/api/session/' . $model_order->requestId, $data);

        if (isset($result)) {
            $model_order->status = $result->status->status;
            $model_order->message = $result->status->message;
            $model_order->save();
        }
        return $model_order;
    }

}
