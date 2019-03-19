<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesUsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('role_user')->insert(array(
            array('user_id' => 1, 'role_id' => 1)
        ));
    }
}
