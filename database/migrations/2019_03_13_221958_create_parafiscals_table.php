<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParafiscalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parafiscals', function (Blueprint $table) {
            $table->increments('id');

            $table->text('legal_representative');
            $table->text('business_name');
            $table->text('tradename');
            $table->string('nit');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('image');
            $table->string('type');

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
        Schema::dropIfExists('parafiscals');
    }
}
