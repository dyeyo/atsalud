<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialSecurityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_security', function (Blueprint $table) {
            $table->increments('id');
            $table->text('business_name');
            $table->text('tradename');
            $table->string('nit', '20')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('phone', '20')->nullable();
            $table->string('image','50')->nullable();
            $table->string('type','100');
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('social_security');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
