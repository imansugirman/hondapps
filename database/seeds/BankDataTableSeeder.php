<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankDataTableSeeder extends Seeder
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

        DB::table('pm')->insert([
            'name' => 'Mulai',
        ]);

        DB::table('pm')->insert([
            'name' => 'Selesai',
        ]);

        DB::table('gr')->insert([
            'name' => 'Mulai',
        ]);

        DB::table('gr')->insert([
            'name' => 'Selesai',
        ]);

        DB::table('part')->insert([
            'name' => 'Mulai',
        ]);

        DB::table('part')->insert([
            'name' => 'Selesai',
        ]);

        DB::table('tambahan')->insert([
            'name' => 'Mulai',
        ]);

        DB::table('tambahan')->insert([
            'name' => 'Selesai',
        ]);

        DB::table('sbalance')->insert([
            'name' => 'Mulai',
        ]);

        DB::table('sbalance')->insert([
            'name' => 'Selesai',
        ]);

        DB::table('inspect')->insert([
            'name' => 'Mulai',
        ]);

        DB::table('inspect')->insert([
            'name' => 'Selesai',
        ]);

        DB::table('cuci')->insert([
            'name' => 'Mulai',
        ]);

        DB::table('cuci')->insert([
            'name' => 'Selesai',
        ]);

        DB::table('delivery')->insert([
            'name' => 'Mulai',
        ]);

        DB::table('delivery')->insert([
            'name' => 'Selesai',
        ]);
    }
}
