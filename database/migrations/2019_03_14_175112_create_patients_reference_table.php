<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsReferenceTable extends Migration
{

    public function up()
    {
        Schema::create('patients_reference', function (Blueprint $table) {
            $table->increments('id');
            $table->string('attention_type', 100);
            $table->string('accompanying_name', 50);
            $table->string('accompanying_lastname', 50);
            $table->string('phone', 10);
            $table->string('email', 50);
            $table->text('medical_assessment');
            $table->text('nursing_care');
            $table->text('rehabilitation_service');
            $table->text('medicines');
            $table->text('supplies');
            $table->integer('afiliate_information_id')->unsigned()->index();
            $table->foreign('afiliate_information_id')->references('id')->on('afiliates_information');
            $table->integer('municipality_id')->unsigned()->index();
            $table->foreign('municipality_id')->references('id')->on('municipalities');
            $table->integer('ips_id')->unsigned()->index();
            $table->foreign('ips_id')->references('id')->on('ips');
            $table->integer('health_team_id')->unsigned();
            $table->foreign('health_team_id')->references('id')->on('health_teams');
            $table->timestamps();
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('patients_reference');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
