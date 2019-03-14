<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->increments('id');

            $table->string( 'business_name');
            $table->string( 'doc_type');
            $table->string( 'doc_number');
            $table->text( 'contributing_type');
            $table->string( 'address');
            $table->string( 'landline');
            $table->string( 'phone_mobile');
            $table->string( 'email');
            $table->integer( 'affiliation_id');
            $table->integer( 'municipality_id');
            $table->foreign('affiliation_id')->references('id')->on('affiliations');
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
        Schema::dropIfExists('employers');
    }
}
