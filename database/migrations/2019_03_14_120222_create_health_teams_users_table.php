<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthTeamsUsersTable extends Migration
{
    public function up()
    {
        Schema::create('health_teams_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('health_team_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('health_team_id')->references('id')->on('health_teams');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('health_teams_users');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
