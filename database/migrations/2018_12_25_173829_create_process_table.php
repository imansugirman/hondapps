<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mobil_id')->unsigned()->nullable();
            $table->foreign('mobil_id')->references('id')->on('mobil')->onDelete('cascade');
            $table->integer('qs_id')->unsigned()->nullable();
            $table->foreign('qs_id')->references('id')->on('qs')->onDelete('cascade');
            $table->integer('pm_id')->unsigned()->nullable();
            $table->foreign('pm_id')->references('id')->on('pm')->onDelete('cascade');
            $table->integer('gr_id')->unsigned()->nullable();
            $table->foreign('gr_id')->references('id')->on('gr')->onDelete('cascade');
            $table->integer('part_id')->unsigned()->nullable();
            $table->foreign('part_id')->references('id')->on('part')->onDelete('cascade');
            $table->integer('pekerjaan_id')->unsigned()->nullable();
            $table->foreign('pekerjaan_id')->references('id')->on('pekerjaan')->onDelete('cascade');
            $table->integer('sbalance_id')->unsigned()->nullable();
            $table->foreign('sbalance_id')->references('id')->on('sbalance')->onDelete('cascade');
            $table->integer('inspection_id')->unsigned()->nullable();
            $table->foreign('inspection_id')->references('id')->on('inspection')->onDelete('cascade');
            $table->integer('cuci_id')->unsigned()->nullable();
            $table->foreign('cuci_id')->references('id')->on('cuci')->onDelete('cascade');
            $table->integer('delivery_id')->unsigned()->nullable();
            $table->foreign('delivery_id')->references('id')->on('delivery')->onDelete('cascade');
            // $table->dateTime('start_at')->nullable()->default(null);
            // $table->dateTime('finish_at')->nullable()->default(null);
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
        Schema::dropIfExists('process');
    }
}
