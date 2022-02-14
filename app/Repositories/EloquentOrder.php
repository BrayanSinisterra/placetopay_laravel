<?php

namespace App\Repositories;

use App\Models\Orders;

class EloquentOrder implements OrderRepository
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
     * Get all Order.
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function orderAll()
    {
        return $this->model->all();
    }

    /**
     * Crear una nueva orden
     *
     * @param object $request
     * @return App\Models\Orders $model
     */
    public function create($request)
    {
        return $this->model->create($request);
    }
}
