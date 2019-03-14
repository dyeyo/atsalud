<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinic_histories', function (Blueprint $table) {
            $table->increments('id');

            $table->text('observations');
            $table->integer('afiliates_information_id')->unsigned();
            $table->foreign('afiliates_information_id')->references('id')->on('afiliates_informations');

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
        Schema::dropIfExists('clinic_histories');
    }
}
