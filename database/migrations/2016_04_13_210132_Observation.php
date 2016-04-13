<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Observation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('observations', function (Blueprint $table) {
               $table->increments('ID');
               $table->timestamps();
               $table->integer('IP_ID');
               $table->integer('Loc_ID');
               $table->integer('Job_ID');
               $table->integer('Moment_ID');
               $table->integer('Result_ID');
               $table->integer('Reason_ID');
               $table->boolean('Gloves');
               $table->binary('Entry Exit');
               });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('observations');
    }
}
