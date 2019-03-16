<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostServicesTable extends Migration
{

    public function up()
    {
        Schema::create('cost_services', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->decimal('value');
            $table->timestamps();
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('cost_services');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
