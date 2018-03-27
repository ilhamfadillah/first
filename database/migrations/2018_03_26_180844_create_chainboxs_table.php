<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChainboxsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('countries', function (Blueprint $table) {
        $table->increments('id', true);
        $table->string('sortname');
        $table->string('name');
        $table->string('phonecode');
        $table->timestamps();
      });

      Schema::create('states', function (Blueprint $table) {
        $table->increments('id', true);
        $table->string('name');
        $table->integer('country_id')->unsigned();
        //$table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        $table->timestamps();
      });

      Schema::create('cities', function (Blueprint $table) {
        $table->increments('id', true);
        $table->string('name');
        $table->integer('state_id')->unsigned();
        //$table->foreign('state_id')->references('id')->on('state')->onDelete('cascade');
        $table->timestamps();
      });

      Schema::table('states', function (Blueprint $table) {
        $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
      });

      Schema::table('cities', function (Blueprint $table) {
        $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
      });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("countries");
        Schema::drop("states");
        Schema::drop("cities");
    }
}
