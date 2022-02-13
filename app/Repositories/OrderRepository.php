<?php

namespace App\Repositories;

/**
 * Interface de Orders
 *
 * @package App\Http\Interfaces
 */

interface OrderRepository
{
    public function orderAll();
    public function create($request);
}
