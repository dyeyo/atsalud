<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerritorialEntityTable extends Migration
{

    public function up()
    {
        Schema::create('territorial_entity', function (Blueprint $table) {
            $table->increments('id');
            $table->text('territorial_identification');
            $table->string('number_card', 20);
            $table->string('sisben', 20);
            $table->string('level', 5);
            $table->date('date_filiation');
            $table->date('validation_date');
            $table->text('observations');
            $table->integer('affiliation_id')->unsigned()->index();
            $table->foreign('affiliation_id')->references('id')->on('affiliations');
            $table->timestamps();
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('territorial_entity');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
