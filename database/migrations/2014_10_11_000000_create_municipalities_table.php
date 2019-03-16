<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipalitiesTable extends Migration
{

    public function up()
    {
        Schema::create('municipalities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', '100');
            $table->integer('departament_id')->unsigned()->index();
            $table->foreign('departament_id')->references('id')->on('departaments');
            $table->timestamps();
        });
    }


    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('municipalities');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
