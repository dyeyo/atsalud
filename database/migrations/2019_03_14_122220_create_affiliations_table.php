<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffiliationsTable extends Migration
{
    public function up()
    {
        Schema::create('affiliations', function (Blueprint $table) {
            $table->increments('id');
            $table->date('application_date');
            $table->string('type_procedure','50');
            $table->string('affiliation_type', '50');
            $table->string('affiliation_subtype','100');
            $table->string('regime', '20');
            $table->string('affiliated_type', '50');
            $table->text('contributing_type');
            $table->string('code','10');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('affiliations');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
