<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'id'    => '1',
            'name'  => 'Masuk',
            'reason'  => 'Mulai Dari SA',
        ]);

        DB::table('statuses')->insert([
            'id'    => '2',
            'name'  => 'Mulai',
            'reason'  => 'Mulai Dikerjakan',
        ]);

        DB::table('statuses')->insert([
            'id'    => '3',
            'name'  => 'Selesai',
            'reason'  => 'Selesai Dikerjakan',
        ]);
    }
}
