<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    // Create Products table:
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name', 255)->charset('utf8');
            $table->string('product_code', 30);
            $table->integer('product_price');
            $table->text('product_info');
            $table->integer('stock');
            $table->string('image')->nullable();
            $table->integer('spl_price')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
            $table->foreign('category_id')
            ->references('id')->on('categories')
            ->onDelete('cascade');
        });
    }

    // Destroy Products table:
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
