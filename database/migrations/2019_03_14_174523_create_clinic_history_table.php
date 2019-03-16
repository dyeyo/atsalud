<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicHistoryTable extends Migration
{

    public function up()
    {
        Schema::create('clinic_history', function (Blueprint $table) {
            $table->increments('id');
            $table->text('clinic_history');
            $table->integer('afiliate_information_id')->unsigned()->index();
            $table->foreign('afiliate_information_id')->references('id')->on('afiliates_information');
            $table->timestamps();
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('clinic_history');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
