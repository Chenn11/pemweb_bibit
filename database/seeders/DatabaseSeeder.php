<?php

namespace Database\Seeders;

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
        $this->call([
            // KategoriSeeder::class,
            // TagSeeder::class,
            // CourierSeeder::class,
            // LocationSeeder::class,
            UserSeeder::class,
            Provinces::class,
            CitiesSeeder::class,
        ]);
    }
}
