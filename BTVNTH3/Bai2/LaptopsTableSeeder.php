<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class LaptopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('laptops')->insert([
                'brand' => $faker->company,
                'model' => $faker->word,
                'specifications' => $faker->word . ', 8GB RAM, 256GB SSD',
                'rental_status' => $faker->boolean,
                'renter_id' => $faker->numberBetween(1, 100), // Giả sử đã có 100 renters
            ]);
        }
    }
}
