<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mobil_id')->unsigned()->nullable();
            $table->foreign('mobil_id')->references('id')->on('mobil')->onDelete('cascade');
            $table->string('qs_status')->nullable();
            $table->dateTime('qstime_start')->nullable();
            $table->dateTime('qstime_finish')->nullable();
            $table->string('pm_status')->nullable();
            $table->dateTime('pmtime_start')->nullable();
            $table->dateTime('pmtime_finish')->nullable();
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
        Schema::dropIfExists('proses');
    }
}
