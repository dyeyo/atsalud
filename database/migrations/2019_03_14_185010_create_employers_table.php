<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration
{

    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('business_name', 50);
            $table->string('doc_type', 2);
            $table->string('doc_number', 20);
            $table->text('contributing_type');
            $table->string('address', 50);
            $table->string('landline', 10);
            $table->string('phone_mobile', 10);
            $table->integer('municipality_id')->unsigned()->index();
            $table->foreign('municipality_id')->references('id')->on('municipalities');
            $table->integer('affiliation_id')->unsigned()->index();
            $table->foreign('affiliation_id')->references('id')->on('affiliations');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employers');
    }
}
