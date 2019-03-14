<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnexesReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annexes_references', function (Blueprint $table) {
            $table->increments('id');

            $table->text('attached_route');
            $table->string('type');
            $table->integer('reference_patient_id')->unsigned();

            $table->foreign('reference_patient_id')->references('id')->on('reference_patients');

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
        Schema::dropIfExists('annexes_references');
    }
}
