<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAfiliatesInformationTable extends Migration
{
    public function up()
    {
        Schema::create('afiliates_information', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firts_name', 50);
            $table->string('second_name', 50);
            $table->string('surename', 50);
            $table->string('second_surename', 50);
            $table->string('doc_type', 2);
            $table->string('doc_number', 20)->unique();
            $table->date('birthdate');
            $table->string('sex', 20);
            $table->string('ethnic_group', 100);
            $table->text('disability');
            $table->string('type_disability', 45);
            $table->string('condition', 30);
            $table->string('stratum', 2);
            $table->text('educative_level');
            $table->string('civil_status', 50);
            $table->text('special_population');
            $table->decimal('contribution_base');
            $table->string('address',50);
            $table->string('zone', 8);
            $table->string('location', 50);
            $table->string('neighborhood',50);
            $table->string('landline',10);
            $table->string('mobile_phone', 10);
            $table->string('email', 50)->unique();
            $table->string('family_nucleus_code',5);
            $table->integer('municipality_id')->unsigned()->index();
            $table->foreign('municipality_id')->references('id')->on('municipalities');
            $table->integer('ips_id')->unsigned()->index();
            $table->foreign('ips_id')->references('id')->on('ips');
            $table->integer('affiliation_id')->unsigned()->index();
            $table->foreign('affiliation_id')->references('id')->on('affiliations');
            $table->timestamps();
        });
    }
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('afiliates_information');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
