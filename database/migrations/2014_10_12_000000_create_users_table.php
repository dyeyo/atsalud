<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', '50');
            $table->string('last_name' , '50');
            $table->string('doc_type', '2')->nullable();
            $table->string('doc_number', '20')->nullable();
            $table->string('address','50')->nullable();
            $table->string('phone_one','10')->nullable();
            $table->string('phone_two','10')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('sex','20')->nullable();
            $table->string('bank','100')->nullable();
            $table->string('account_bank','20')->nullable();
            $table->string('account_number', '20')->nullable();
            $table->string('email','50')->unique();
            $table->string('username','20')->unique();
            $table->text('password');
            $table->text('photo')->nullable();
            $table->text('speciality')->nullable();
            $table->decimal('salary')->nullable();
            $table->text('biography')->nullable();
            $table->integer('reset_password')->default('0');
            $table->integer('municipality_id')->unsigned()->index();
            $table->foreign('municipality_id')->references('id')->on('municipalities');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('users');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
