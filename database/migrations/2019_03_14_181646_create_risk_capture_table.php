<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiskCaptureTable extends Migration
{

    public function up()
    {
        Schema::create('risk_capture', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('afiliate_information_id')->unsigned();
            $table->foreign('afiliate_information_id')->references('id')->on('afiliates_information');
            $table->timestamps();
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('risk_capture');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
