<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{

    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname', 40)->charset('utf8');
            $table->string('state')->charset('utf8');
            $table->string('country')->charset('utf8');
            $table->string('city')->charset('utf8');
            $table->string('payment_type');
            $table->string('pincode');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')
            ->references('id')
            ->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
