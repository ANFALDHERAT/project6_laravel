<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'ItemName' => 'Living Rooms',
            'description' => "Your act of donating a bedroom can provide warmth
            and shelter to someone in need. A simple gesture of kindness can make
            a world of difference in someone's life.",
            'image' => 'http://127.0.0.1:8000/assets/img/livingroom.jpeg',

        ]);
        Item::create([
            'ItemName' => 'Bed Rooms',
            'description' => "Transform lives by donating a living room today.
             Your contribution creates a cozy haven, fostering warmth and togetherness
              for those in need. Be the catalyst for positive change and make a house a home.",
            'image' => 'http://127.0.0.1:8000/assets/img/bedroom.jpeg',

        ]);
        Item::create([
            'ItemName' => 'Kitchens',
            'description' => "Your contribution can change lives and fill hearts with warmth.
             Donate a kitchen today, and empower families to cook up happiness and nourishment
              for a brighter tomorrow.",
            'image' => 'http://127.0.0.1:8000/assets/img/kitchen.jpeg',

        ]);
        Item::create([
            'ItemName' => 'Others',
            'description' => "When you donate, you empower others and inspire
            a brighter future for those in need. Every contribution, no matter how modest,
             fuels hope and compassion.",
            'image' => 'http://127.0.0.1:8000/assets/img/others.jpeg',

        ]);
    }
}
