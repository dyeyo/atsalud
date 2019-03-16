<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportNoveltyTable extends Migration
{

    public function up()
    {
        Schema::create('report_novelty', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->text('type');
            $table->integer('afiliate_information_id')->unsigned()->index();
            $table->foreign('afiliate_information_id')->references('id')->on('afiliates_information');
            $table->integer('affiliation_id')->unsigned()->index();
            $table->foreign('affiliation_id')->references('id')->on('affiliations');
            $table->timestamps();
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('report_novelty');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
