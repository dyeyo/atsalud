<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        Permission::create([
            'name'=>'Navegar Usurios',
            //ruta
            'slug'=>'users.index',
            'description'=>'lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name'=>'Ver detalle de Usurios',
            //ruta
            'slug'=>'users.show',
            'description'=>'Ver el detalle de los usuarios del sistema',
        ]);

        Permission::create([
            'name'=>'Edicion Usurios',
            //ruta
            'slug'=>'users.edit',
            'description'=>'Edicion todos los usuarios del sistema',
        ]);

        Permission::create([
            'name'=>'Eliminar Usurios',
            //ruta
            'slug'=>'users.destroy',
            'description'=>'Eliminar todos los usuarios del sistema',
        ]);

        /**-------------------------------------------------------*/

        /**ROLES**/

        Permission::create([
            'name'=>'Navegar Roles',
            //ruta
            'slug'=>'roles.index',
            'description'=>'lista y navega todos los Roles del sistema',
        ]);

        Permission::create([
            'name'=>'Ver detalle de Roles',
            //ruta
            'slug'=>'roles.show',
            'description'=>'Ver el detalle de los Roles del sistema',
        ]);

        Permission::create([
            'name'=>'Crear Roles',
            //ruta
            'slug'=>'roles.create',
            'description'=>'Edicion todos los Roles del sistema',
        ]);

        Permission::create([
            'name'=>'Edicion Roles',
            //ruta
            'slug'=>'roles.edit',
            'description'=>'Edicion todos los Roles del sistema',
        ]);

        Permission::create([
            'name'=>'Eliminar Roles',
            //ruta
            'slug'=>'roles.destroy',
            'description'=>'Eliminar todos los Roles del sistema',
        ]);
    }
}
