<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mobil_id');
            $table->foreign('mobil_id')->references('id')->on('mobil')->onDelete('cascade');
            $table->string('status')->nullable();
            $table->dateTime('start_at')->nullable()->default(null);
            $table->dateTime('finish_at')->nullable()->default(null);
            $table->timestamps();
        });

        Schema::create('pm', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mobil_id');
            $table->foreign('mobil_id')->references('id')->on('mobil')->onDelete('cascade');
            $table->string('status')->nullable();
            $table->dateTime('start_at')->nullable()->default(null);
            $table->dateTime('finish_at')->nullable()->default(null);
            $table->timestamps();
        });

        Schema::create('gr', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mobil_id');
            $table->foreign('mobil_id')->references('id')->on('mobil')->onDelete('cascade');
            $table->string('status')->nullable();
            $table->dateTime('start_at')->nullable()->default(null);
            $table->dateTime('finish_at')->nullable()->default(null);
            $table->timestamps();
        });

        Schema::create('part', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mobil_id');
            $table->foreign('mobil_id')->references('id')->on('mobil')->onDelete('cascade');
            $table->string('status')->nullable();
            $table->dateTime('start_at')->nullable()->default(null);
            $table->dateTime('finish_at')->nullable()->default(null);
            $table->timestamps();
        });

        Schema::create('pekerjaan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mobil_id');
            $table->foreign('mobil_id')->references('id')->on('mobil')->onDelete('cascade');
            $table->string('status')->nullable();
            $table->dateTime('start_at')->nullable()->default(null);
            $table->dateTime('finish_at')->nullable()->default(null);
            $table->timestamps();
        });

        Schema::create('sbalance', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mobil_id');
            $table->foreign('mobil_id')->references('id')->on('mobil')->onDelete('cascade');
            $table->string('status')->nullable();
            $table->dateTime('start_at')->nullable()->default(null);
            $table->dateTime('finish_at')->nullable()->default(null);
            $table->timestamps();
        });

        Schema::create('inspection', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mobil_id');
            $table->foreign('mobil_id')->references('id')->on('mobil')->onDelete('cascade');
            $table->string('status')->nullable();
            $table->dateTime('start_at')->nullable()->default(null);
            $table->dateTime('finish_at')->nullable()->default(null);
            $table->timestamps();
        });
        Schema::create('cuci', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mobil_id');
            $table->foreign('mobil_id')->references('id')->on('mobil')->onDelete('cascade');
            $table->string('status')->nullable();
            $table->dateTime('start_at')->nullable()->default(null);
            $table->dateTime('finish_at')->nullable()->default(null);
            $table->timestamps();
        });

        Schema::create('delivery', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mobil_id');
            $table->foreign('mobil_id')->references('id')->on('mobil')->onDelete('cascade');
            $table->string('status')->nullable();
            $table->dateTime('delivery_at')->nullable()->default(null);
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
        Schema::dropIfExists('qs');
        Schema::dropIfExists('pm');
        Schema::dropIfExists('gr');
        Schema::dropIfExists('part');
        Schema::dropIfExists('pekerjaan');
        Schema::dropIfExists('sbalance');
        Schema::dropIfExists('inspection');
        Schema::dropIfExists('cuci');
        Schema::dropIfExists('delivery');
    }
}
