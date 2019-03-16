<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelectableRisksTable extends Migration
{

    public function up()
    {
        Schema::create('selectable_risks', function (Blueprint $table) {
            $table->increments('id');
            $table->text('type');
            $table->text('value');
            $table->integer('risk_id')->unsigned();
            $table->foreign('risk_id')->references('id')->on('risks');
            $table->timestamps();
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('selectable_risks');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
