<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIpsTable extends Migration
{
    public function up()
    {
        Schema::create('ips', function (Blueprint $table) {
            $table->increments('id');
            $table->text('business_name')->nullable();
            $table->text('tradename')->nullable();
            $table->string('nit','20')->nullable();
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email');
            $table->integer('municipality_id')->unsigned()->index();
            $table->foreign('municipality_id')->references('id')->on('municipalities');
            $table->timestamps();
			
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('ips');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
