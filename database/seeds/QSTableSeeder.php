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
            'name' => 'Mulai',
        ]);

        DB::table('qs')->insert([
            'name' => 'Selesai',
        ]);
    }
}
