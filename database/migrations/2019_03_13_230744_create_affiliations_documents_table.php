<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffiliationsDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliations_documents', function (Blueprint $table) {
            $table->increments('id');

            $table->text('document_route');
            $table->string('type');
            $table->integer('affiliations_id');
            $table->foreign('affiliations_id')->references('id')->on('affiliations');


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
        Schema::dropIfExists('affiliations_documents');
    }
}
