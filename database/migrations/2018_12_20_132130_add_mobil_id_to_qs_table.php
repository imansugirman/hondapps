<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMobilIdToQsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('qs', function (Blueprint $table) {
            $table->integer('mobil_id')->unsigned()->nullable();
            $table->foreign('mobil_id')->references('id')->on('mobil')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('qs', function (Blueprint $table) {
            $table->dropForeign(['mobil_id']);
        });
    }
}
