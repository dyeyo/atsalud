<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelectablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selectables', function (Blueprint $table) {
            $table->increments('id');

            $table->text('content');
            $table->string('type')->nullable();
            $table->integer('affiliation_id')->unsigned();
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
        Schema::dropIfExists('selectables');
    }
}
