<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Repositories\OrderRepository;

class OrderController extends Controller
{
    /**
     * @var $order
     */

    private $order;

    /**
     * OrderController constructor.
     *
     * @param App\Repositories\OrderRepository $order
     */

    public function __construct(OrderRepository $order)
    {
        $this->order = $order;
    }

    /**
     * Get all Order.
     *
     * @return Illuminate\View
     */

    public function index()
    {
        return view('orders_customer.index')->with('orders', $this->order->orderAll());
    }

    /**
     * Get crear order
     *
     * @return Illuminate\View
     */
    public function create()
    {
        return view('orders_customer.form');
    }

    /**
     * Crear order
     *
     * @var array $request
     * @return Illuminate\View
     */
    public function store(OrderRequest $request)
    {
        return view('orders_customer.confirmation')->with('order', $this->order->create($request));
    }

    /**
     * Crer sesion con servicio Placetopay
     *
     * @var int $id
     * @return url
     */

    public function placetopay($id)
    {
        return $this->order->payload($id);
    }

}
