<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('last_aname');
            $table->string('doc_type');
            $table->string('doc_number');
            $table->string('address');
            $table->string('phone_one');
            $table->string('birthdate');
            $table->string('sex');
            $table->string('bank');
            $table->string('account_type');
            $table->string('account_numer');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->integer('municipality_id');
            $table->foreign('municipality_id')->references('id')->on('municipalities');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
