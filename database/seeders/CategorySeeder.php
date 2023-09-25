<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::truncate();
        Category::create([
            'name' => 'Give Donation',
            'description' => 'Support important causes by donating today',
            'image' => 'http://127.0.0.1:8000/assets/img/heart.png',
        ]);
        Category::create([
            'name' => 'Give Services',
            'description' => 'Your support helps us continue our mission and make a positive impact on the community',
            'image' => 'http://127.0.0.1:8000/assets/img/group.png',
        ]);
        Category::create([
            'name' => 'Give Items',
            'description' => 'Join our volunteer efforts by donating items that can make a difference',
            'image' => 'http://127.0.0.1:8000/assets/img/product.png',
        ]);
    }
}
