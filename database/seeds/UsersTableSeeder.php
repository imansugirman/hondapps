<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nakamura Agatha',
            'email' => 'nakamura.agatha@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);
        
        DB::table('users')->insert([
            'name' => 'SA',
            'email' => 'sa@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Operator',
            'email' => 'operator@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);
    }
}
