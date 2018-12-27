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
            $table->dateTime('qstime_start')->nullable();
            $table->dateTime('qstime_finish')->nullable();
            $table->integer('pm_id')->unsigned()->nullable();
            $table->foreign('pm_id')->references('id')->on('pm')->onDelete('cascade');
            $table->dateTime('pmtime_start')->nullable();
            $table->dateTime('pmtime_finish')->nullable();
            $table->integer('gr_id')->unsigned()->nullable();
            $table->foreign('gr_id')->references('id')->on('gr')->onDelete('cascade');
            $table->dateTime('grtime_start')->nullable();
            $table->dateTime('grtime_finish')->nullable();
            $table->integer('part_id')->unsigned()->nullable();
            $table->foreign('part_id')->references('id')->on('part')->onDelete('cascade');
            $table->dateTime('parttime_start')->nullable();
            $table->dateTime('parttime_finish')->nullable();
            $table->integer('pekerjaan_id')->unsigned()->nullable();
            $table->foreign('pekerjaan_id')->references('id')->on('pekerjaan')->onDelete('cascade');
            $table->dateTime('pekerjaantime_start')->nullable();
            $table->dateTime('pekerjaantime_finish')->nullable();
            $table->integer('sbalance_id')->unsigned()->nullable();
            $table->foreign('sbalance_id')->references('id')->on('sbalance')->onDelete('cascade');
            $table->dateTime('sbalancetime_start')->nullable();
            $table->dateTime('sbalancetime_finish')->nullable();
            $table->integer('inspection_id')->unsigned()->nullable();
            $table->foreign('inspection_id')->references('id')->on('inspection')->onDelete('cascade');
            $table->dateTime('inspectiontime_start')->nullable();
            $table->dateTime('inspectiontime_finish')->nullable();
            $table->integer('cuci_id')->unsigned()->nullable();
            $table->foreign('cuci_id')->references('id')->on('cuci')->onDelete('cascade');
            $table->dateTime('cucitime_start')->nullable();
            $table->dateTime('cucitime_finish')->nullable();
            $table->integer('delivery_id')->unsigned()->nullable();
            $table->foreign('delivery_id')->references('id')->on('delivery')->onDelete('cascade');
            $table->dateTime('deliverytime_start')->nullable();
            $table->dateTime('deliverytime_finish')->nullable();
            $table->dateTime('start_at')->nullable()->default(null);
            $table->dateTime('finish_at')->nullable()->default(null);
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
