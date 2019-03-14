<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffiliationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliations', function (Blueprint $table) {
            $table->increments('id');

            $table->date('application_date');
            $table->string('type_procedure');
            $table->string('affiliation_type');
            $table->string('affiliation_subtype');
            $table->string('regime');
            $table->string('affiliated_type');
            $table->string('contributing_type');
            $table->string('code');
            $table->integer('status');
            $table->string('user_id');
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
        Schema::dropIfExists('affiliations');
    }
}
