<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HealthcareProfessional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('healthcareprofessionals', function (Blueprint $table) {
          $table->increments('Job_ID');
          $table->string('PositionName');
        });
    }

    /**
     * Reverse the migrations.
     *
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::drop('observations');
     }
}
