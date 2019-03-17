<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name' => 'Ricardo',
            'last_name' => 'Alvarez',
            'email' => 'rasoftdev@outlook.com',
            'username' => 'ricardoalvarez',
            'password' => bcrypt('admin'),
            'municipality_id' => 145,
            'remember_token' => str_random(60),
        ]);
    }
}
