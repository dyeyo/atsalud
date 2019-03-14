<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportNoveltiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_novelties', function (Blueprint $table) {
            $table->increments('id');

            $table->date('date');
            $table->text('type');
            $table->integer('afiliate_information_id')->unsigned();
            $table->integer('affiliation_id')->unsigned();

            $table->foreign('afiliate_information_id')->references('id')->on('afiliates_information');
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
        Schema::dropIfExists('report_novelties');
    }
}
