<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAfialtesInformationParafiscalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afialtes_information_parafiscals', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('applicant_information_id')->unsigned();
            $table->integer('parafiscal_id')->unsigned();

            $table->foreign('applicant_information_id')->references('id')->on('afiliates_informations');
            $table->foreign('parafiscal_id')->references('id')->on('parafiscals');

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
        Schema::dropIfExists('afialtes_information_parafiscals');
    }
}
