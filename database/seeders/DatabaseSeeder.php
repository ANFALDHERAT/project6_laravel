<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\CategorySeeder;
use Database\Seeders\DonationSeeder;
use Database\Seeders\ItemSeeder;
use Database\Seeders\ServiceSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
       User::factory(10)->create();
        $this->call([
            CategorySeeder::class,
            DonationSeeder::class,
            ItemSeeder::class,
            ServiceSeeder::class
        ]);
    }
}
