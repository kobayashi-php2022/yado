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
            userSeeder::class,
            planSeeder::class,
            CategoriesSeeder::class,
            hotelSeeder::class,
            orderSeeder::class,
            changeSeeder::class,
            commentSeeder::class,
        ]);
    }
}
