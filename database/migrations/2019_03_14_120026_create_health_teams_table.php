<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthTeamsTable extends Migration
{
    public function up()
    {
        Schema::create('health_teams', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->string('company_name', '100');
            $table->string('nit', '20');
            $table->string('attention_schedule', '45');
            $table->integer('municipality_id')->unsigned()->index();
            $table->foreign('municipality_id')->references('id')->on('municipalities');
            $table->timestamps();
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('health_teams');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
