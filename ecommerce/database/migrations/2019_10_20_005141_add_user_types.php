<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserTypes extends Migration
{
    
    // Insert two types of users:
    public function up()
    {
        DB::table('user_types')->insert(array(
            'user_type' => 'Admin',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('user_types')->insert(array(
            'user_type' => 'Contact',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
    }

    public function down()
    {
        //
    }
}
