<?php

namespace Tests\Feature;

use App\Models\Orders;
use Tests\TestCase;

class OrderTest extends TestCase
{

    /**
     * Test de creacion de orden.
     *
     * @return void
     */
    public function testVerificateCreateOrder()
    {
        $response = $this->get('/');
        $data = [
            'customer_name' => 'Brayan Libreros',
            'customer_email' => 'brayan@gmail.com',
            'customer_mobile' => '3135317624',
            'reference' => '3135317624',
            'product_description' => 'Celular alta gama',
            'currency' => 'COP',
            'total' => 20000,
        ];
        $order = Orders::create($data);
        if (isset($order)) {
            $response->assertStatus(200);
        } else {
            $response->assertStatus(500);
        }
    }
}
