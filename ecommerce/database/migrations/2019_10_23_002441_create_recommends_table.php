<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecommendsTable extends Migration
{

    public function up()
    {
        Schema::create('recommends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('product_id')
            ->references('id')
            ->on('products');
            $table->foreign('user_id')
            ->references('id')
            ->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('recommends');
    }
}
