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
            GameSeeder::class,
            TagSeeder::class,
            GameTagDetailSeeder::class,
            GameImageSeeder::class,
            GameImageDetailSeeder::class,
            ItemSeeder::class
        ]);
    }
}
