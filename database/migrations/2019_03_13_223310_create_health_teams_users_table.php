<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthTeamsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('health_teams_users');
    }
}
