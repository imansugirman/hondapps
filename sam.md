Schema::create('mobil', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('tipe');
            $table->string('no_polisi');
            $table->timestamps();
        });



$table->integer('car_id')->unsigned();
            $table->foreign('car_id')->references('id')->on('car')->onDelete('cascade');
            $table->integer('qs_id')->unsigned();
            $table->foreign('qs_id')->references('id')->on('qs')->onDelete('cascade');
            $table->dateTime('start_at');
            $table->dateTime('finish_at');