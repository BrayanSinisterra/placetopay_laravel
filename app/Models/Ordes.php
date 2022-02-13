<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordes extends Model
{
    use HasFactory;

    /**
     * Tabla orders asociada al modelo
     *
     * @var string
     */

    protected $table = 'orders';

    /**
     * Atributos del modelo para la tabla orders
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_mobile',
        'reference',
        'product_description',
        'currency',
        'total',
        'status',
    ];
}
