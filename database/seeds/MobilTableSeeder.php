<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MobilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mobil')->insert([
            'no_polisi'    => 'B2272HB'
        ]);

        DB::table('mobil')->insert([
            'no_polisi'    => 'T6672HB'
        ]);

        DB::table('mobil')->insert([
            'no_polisi'    => 'K6672NC'
        ]);
    }
}
