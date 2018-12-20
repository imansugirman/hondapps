Schema::create('mobil', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('tipe');
            $table->string('no_polisi');
            $table->timestamps();
        });