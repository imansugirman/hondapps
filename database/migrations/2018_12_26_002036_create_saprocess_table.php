<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaprocessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saprocess', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mobil_id')->unsigned()->nullable();
            $table->foreign('mobil_id')->references('id')->on('mobil')->onDelete('cascade');
            $table->integer('qs_id')->unsigned()->nullable();
            $table->foreign('qs_id')->references('id')->on('qs')->onDelete('cascade');
            $table->integer('pm_id')->unsigned()->nullable();
            $table->foreign('pm_id')->references('id')->on('pm')->onDelete('cascade');
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
        Schema::dropIfExists('saprocess');
    }
}
