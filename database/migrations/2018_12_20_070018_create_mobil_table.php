<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobil', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_polisi');
            $table->integer('qs_id')->unsigned();
            $table->foreign('qs_id')->references('id')->on('qs')->onDelete('cascade');
            $table->integer('pm_id')->unsigned();
            $table->foreign('pm_id')->references('id')->on('pm')->onDelete('cascade');
            $table->integer('gr_id')->unsigned();
            $table->foreign('gr_id')->references('id')->on('gr')->onDelete('cascade');
            $table->integer('part_id')->unsigned();
            $table->foreign('part_id')->references('id')->on('part')->onDelete('cascade');
            $table->integer('tambahan_id')->unsigned();
            $table->foreign('tambahan_id')->references('id')->on('tambahan')->onDelete('cascade');
            $table->integer('sbalance_id')->unsigned();
            $table->foreign('sbalance_id')->references('id')->on('sbalance')->onDelete('cascade');
            $table->integer('inspect_id')->unsigned();
            $table->foreign('inspect_id')->references('id')->on('inspect')->onDelete('cascade');
            $table->integer('cuci_id')->unsigned();
            $table->foreign('cuci_id')->references('id')->on('cuci')->onDelete('cascade');
            $table->integer('delivery_id')->unsigned();
            $table->foreign('delivery_id')->references('id')->on('delivery')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobil');
    }
}
