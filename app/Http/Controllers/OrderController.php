<?php

namespace App\Http\Controllers;

use App\Repositories\OrderRepository;

class OrderController extends Controller
{
    /**
     * @var $interfaceOrder
     */

    private $order;

    /**
     * TaskController constructor.
     *
     * @param App\Interfaces\OrderRepository $order
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
}
