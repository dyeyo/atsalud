<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiskDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('risk_data', function (Blueprint $table) {
            $table->increments('id');

            $table->text('type');
            $table->text('value');
            $table->integer('risk_id')->unsigned();
            $table->foreign('risk_id')->references('id')->on('risks');

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
        Schema::dropIfExists('risk_data');
    }
}
