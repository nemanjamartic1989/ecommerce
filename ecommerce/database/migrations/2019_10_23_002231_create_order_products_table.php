<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
{

    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tax');
            $table->integer('total');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('order_id');
            $table->integer('qty');
            $table->timestamps();
            $table->foreign('product_id')
            ->references('id')
            ->on('products');
            $table->foreign('order_id')
            ->references('id')
            ->on('orders');
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_products');
    }
}
