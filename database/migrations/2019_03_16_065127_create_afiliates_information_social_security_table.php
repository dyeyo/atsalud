<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAfiliatesInformationSocialSecurityTable extends Migration
{

    public function up()
    {
        Schema::create('afiliates_information_social_security', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('afiliate_information_id')->unsigned();
            $table->integer('social_security_id')->unsigned();
            $table->foreign('afiliate_information_id')->references('id')->on('afiliates_information');
            $table->foreign('social_security_id')->references('id')->on('social_security');
            $table->timestamps();
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('afiliates_information_social_security');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
