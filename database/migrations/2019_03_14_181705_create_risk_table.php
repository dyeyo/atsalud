<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiskTable extends Migration
{

    public function up()
    {
        Schema::create('risks', function (Blueprint $table) {
            $table->increments('id');
            $table->text('risk_type');
            $table->integer('risk_capture_id')->unsigned();
            $table->foreign('risk_capture_id')->references('id')->on('risk_capture');
            $table->timestamps();
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('risks');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
