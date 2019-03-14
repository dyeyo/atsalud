<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelectableRisksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selectable_risks', function (Blueprint $table) {
            $table->increments('id');

            $table->text('type');
            $table->string('value');
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
        Schema::dropIfExists('selectable_risks');
    }
}
