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
            ShopSeeder::class,
            ImageSeeder::class,
            AdminSeeder::class,
            // CapacitySeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
