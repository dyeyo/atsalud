<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnexesReferenceTable extends Migration
{

    public function up()
    {
        Schema::create('annexes_reference', function (Blueprint $table) {
            $table->increments('id');
            $table->text('attached_route');
            $table->string('type', 10);
            $table->integer('patient_reference_id')->unsigned();
            $table->foreign('patient_reference_id')->references('id')->on('patients_reference');
            $table->timestamps();
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('annexes_reference');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
