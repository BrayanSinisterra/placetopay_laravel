<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name', 80);
            $table->string('customer_email', 120);
            $table->string('customer_mobile', 40);
            $table->string('reference', 80);
            $table->text('product_description', 120);
            $table->string('currency', 10);
            $table->bigInteger('total');
            $table->integer('requestId')->nullable();
            $table->string('status', 20)->nullable();
            $table->string('message', 80)->nullable();
            $table->string('url_placetopay', 200)->nullable();
            $table->string('date', 30)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
