<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerritorialEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('territorial_entities', function (Blueprint $table) {
            $table->increments('id');

            $table->text('territorial_identification');
            $table->string('number_card');
            $table->string('sisben');
            $table->string('level');
            $table->date('date_filiation');
            $table->date('validation_date');
            $table->text('observations');

            $table->integer('affiliation_id');
            $table->foreign('affiliation_id')->references('id')->on('affiliations');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('territorial_entities');
    }
}
