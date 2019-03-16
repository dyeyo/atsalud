<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffiliationsDocumentsTable extends Migration
{
    public function up()
    {
        Schema::create('affiliations_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->text('document_route');
            $table->string('type', 100);
            $table->integer('affiliation_id')->unsigned()->index();
            $table->foreign('affiliation_id')->references('id')->on('affiliations');
            $table->timestamps();
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('affiliations_documents');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
