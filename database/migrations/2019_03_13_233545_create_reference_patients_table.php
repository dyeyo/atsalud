<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferencePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reference_patients', function (Blueprint $table) {
            $table->increments('id');

            $table->string('attention_type');
            $table->string('accompanying_name');
            $table->string('accompanying_lastname');
            $table->string('accompanying_lastname');
            $table->string('email');
            $table->text('medical_assessment');
            $table->text('nursing_care');
            $table->text('rehabilitation_service');
            $table->text('medicines');
            $table->text('supplies');

            $table->integer('municipalities_id')->unsigned();
            $table->integer('ips_id')->unsigned();
            $table->integer('health_teams_id')->unsigned();

            $table->foreign('municipalities_id')->references('id')->on('municipalities');
            $table->foreign('ips_id')->references('id')->on('ips');
            $table->foreign('health_teams_id')->references('id')->on('health_teams');

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
        Schema::dropIfExists('reference_patients');
    }
}
