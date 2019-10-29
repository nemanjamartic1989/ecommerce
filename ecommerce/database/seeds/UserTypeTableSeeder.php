<?php

use Illuminate\Database\Seeder;

class UserTypeTableSeeder extends Seeder
{

    public function run()
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
}
