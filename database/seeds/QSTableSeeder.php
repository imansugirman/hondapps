<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QSTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('qs')->insert([
            'mobil_id' => '1',
            'status' => 'Masuk',
        ]);

        DB::table('qs')->insert([
            'mobil_id' => '2',
            'status' => 'Mulai',
        ]);

        DB::table('qs')->insert([
            'mobil_id' => '3',
            'status' => 'Selesai',
        ]);

        DB::table('qs')->insert([
            'status' => 'Arsip',
        ]);

    }
}
