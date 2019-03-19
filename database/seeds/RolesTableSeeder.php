<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class RolesTableSeeder extends Seeder
{

    public function run()
    {
        Role::create([
            'name'        => 'Super Administrador',
            'slug'          => 'super-admin',
            'description'   => 'Rol con acceso total al sistema',
            'special'       => 'all-access',
        ]);
    }
}
