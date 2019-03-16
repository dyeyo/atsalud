<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentsTable extends Migration
{

    public function up()
    {
        Schema::create('departaments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', '100');
            $table->timestamps();
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('departaments');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
