<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersSocialSecurityTable extends Migration
{

    public function up()
    {
        Schema::create('users_social_security', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('social_security_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('social_security_id')->references('id')->on('social_security');
            $table->timestamps();
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('users_social_security');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
