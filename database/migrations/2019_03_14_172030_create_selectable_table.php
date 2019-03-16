<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelectableTable extends Migration
{

    public function up()
    {
        Schema::create('selectables', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->string('type', 100);
            $table->integer('affiliation_id')->unsigned()->index();
            $table->foreign('affiliation_id')->references('id')->on('affiliations');
            $table->timestamps();
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('selectables');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
