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
            $table->unsignedInteger('qs_id');
            $table->foreign('qs_id')->references('id')->on('qs')->onDelete('cascade');
            $table->unsignedInteger('pm_id');
            $table->foreign('pm_id')->references('id')->on('pm')->onDelete('cascade');
            $table->unsignedInteger('gr_id');
            $table->foreign('gr_id')->references('id')->on('gr')->onDelete('cascade');
            $table->unsignedInteger('part_id');
            $table->foreign('part_id')->references('id')->on('part')->onDelete('cascade');
            $table->unsignedInteger('tambahan_id');
            $table->foreign('tambahan_id')->references('id')->on('tambahan')->onDelete('cascade');
            $table->unsignedInteger('sbalance_id');
            $table->foreign('sbalance_id')->references('id')->on('sbalance')->onDelete('cascade');
            $table->unsignedInteger('inspect_id');
            $table->foreign('inspect_id')->references('id')->on('inspect')->onDelete('cascade');
            $table->unsignedInteger('cuci_id');
            $table->foreign('cuci_id')->references('id')->on('cuci')->onDelete('cascade');
            $table->unsignedInteger('delivery_id');
            $table->foreign('delivery_id')->references('id')->on('delivery')->onDelete('cascade');
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
        Schema::dropIfExists('mobil');
    }
}
