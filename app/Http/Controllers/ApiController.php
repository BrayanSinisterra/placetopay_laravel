<?php

namespace App\Http\Controllers;

use App\Repositories\Api\ApiRepository;
use Redirect;

class ApiController extends Controller
{
    /**
     * @var $api
     */

    private $api;

    /**
     * ApiController constructor.
     *
     * @param App\Repositories\ApiRepository $order
     */

    public function __construct(ApiRepository $api)
    {
        $this->api = $api;
    }

    /**
     * Crer sesion con servicio Placetopay
     *
     * @var int $id
     * @return url
     */

    public function placetopay($id)
    {
        return Redirect::to($this->api->payload($id));
    }

}
