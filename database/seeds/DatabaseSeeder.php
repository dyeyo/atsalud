<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(DepartamentsTableSeeder::class);
        $this->call(MunicipalitiesTableSeeder::class);
        $this->call(SocialSecurityTableSeeder::class);
        $this->call(IpsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
    }
}
