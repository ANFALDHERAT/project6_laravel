<?php

namespace Database\Seeders;

use App\Models\Donation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Donation::create([
            'DonationName' => 'Providing Beds for 50 Needy Families',
            'description' => "We're committed to supplying 50 families with new beds, mattresses, and bedding for a better night's sleep and added warmth and comfort in their homes. Your support can make a difference.",
            'image' => 'http://127.0.0.1:8000/assets/img/don.png',
            'amount_needed' => 2000,
        ]);
        Donation::create([
            'DonationName' => 'Providing Seating for a Community Center',
            'description' => "provide 100 sturdy and comfortable chairs for the community center. These chairs will enhance the center's capacity to host diverse events, from educational seminars to cultural celebrations",
            'image' => 'http://127.0.0.1:8000/assets/img/old.jpg',
            'amount_needed' => 4000,
        ]);
        Donation::create([
            'DonationName' => 'Providing Lamps to Light Up Lives',
            'description' => "We'll give 200 energy-efficient lamps to homes without proper lighting, improving studying conditions for children and enhancing family activities",
            'image' => 'http://127.0.0.1:8000/assets/img/don3.jpg',
            'amount_needed' => 1000,
        ]);
    }
}
