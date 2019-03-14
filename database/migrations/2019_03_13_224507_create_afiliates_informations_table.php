<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAfiliatesInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliates_informations', function (Blueprint $table) {
            $table->increments('id');

            $table->string( 'name');
            $table->string( 'second_name');
            $table->string( 'surename');
            $table->string( 'second_surname');
            $table->string( 'doc_type');
            $table->string( 'doc_number');
            $table->date( 'birthdate');
            $table->string( 'sex');
            $table->string( 'ethnic_group');
            $table->text( 'disability');
            $table->text( 'type_disability');
            $table->string( 'condition');
            $table->string( 'sisben');
            $table->string( 'stratum');
            $table->text( 'eduactive_level');
            $table->text( 'special_population');
            $table->text( 'civil_status');
            $table->string( 'special_population');
            $table->double( 'contribution_base');
            $table->string( 'address');
            $table->string( 'zone');
            $table->string( 'location');
            $table->string( 'neighborhood');
            $table->string( 'landline');
            $table->string( 'mobile_phone');
            $table->string( 'email');
            $table->integer( 'affiliation_id ');
            $table->integer( 'ips_id ');
            $table->integer( 'municipality_id ');

            $table->foreign('affiliation_id')->references('id')->on('affiliations');
            $table->foreign('ips_id')->references('id')->on('ips');
            $table->foreign('municipality_id')->references('id')->on('municipalities');


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
        Schema::dropIfExists('afiliates_informations');
    }
}
