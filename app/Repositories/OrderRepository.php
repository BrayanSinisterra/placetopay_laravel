<?php

namespace App\Repositories;

/**
 * Interface de Orders
 *
 * @package App\Repositories
 */

interface OrderRepository
{
    public function orderAll();
    public function create($request);
}
