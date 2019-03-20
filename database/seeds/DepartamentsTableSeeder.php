<?php

use Illuminate\Database\Seeder;
use App\Departament;
class DepartamentsTableSeeder extends Seeder
{

    public function run()
    {
        Departament::create(['name' =>'Antioquia']);
        Departament::create(['name' =>'Atlántico']);
        Departament::create(['name' =>'Bogotá, D.C']);
        Departament::create(['name' =>'Bolívar']);
        Departament::create(['name' =>'Boyacá']);
        Departament::create(['name' =>'Caldas']);
        Departament::create(['name' =>'Caquetá']);
        Departament::create(['name' =>'Cauca']);
        Departament::create(['name' =>'Cesar']);
        Departament::create(['name' =>'Córdoba']);
        Departament::create(['name' =>'Cundinamarca']);
        Departament::create(['name' =>'Chocó']);
        Departament::create(['name' =>'Huila']);
        Departament::create(['name' =>'La guajira']);
        Departament::create(['name' =>'Magdalena']);
        Departament::create(['name' =>'Meta']);
        Departament::create(['name' =>'Nariño']);
        Departament::create(['name' =>'Norte de Santander']);
        Departament::create(['name' =>'Quindío']);
        Departament::create(['name' =>'Risaralda']);
        Departament::create(['name' =>'Santander']);
        Departament::create(['name' =>'Sucre']);
        Departament::create(['name' =>'Tolima']);
        Departament::create(['name' =>'Valle del cauca']);
        Departament::create(['name' =>'Arauca']);
        Departament::create(['name' =>'Casanare']);
        Departament::create(['name' =>'Putumayo']);
        Departament::create(['name' =>'Archipiélago de san andrés, providencia y santa catalina']);
        Departament::create(['name' =>'Amazonas']);
        Departament::create(['name' =>'Guainía']);
        Departament::create(['name' =>'Guaviare']);
        Departament::create(['name' =>'Vaupés']);
        Departament::create(['name' =>'Vichada']);
    }
}
