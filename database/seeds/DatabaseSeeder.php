<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(MobilTableSeeder::class);
        $this->call(QSTableSeeder::class);
        // $this->call(PermissionTableSeeder::class);
    }
}
