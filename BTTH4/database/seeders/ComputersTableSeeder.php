<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('computers')->insert([
                'computer_name' => $faker->word . '-' . $faker->numberBetween(1, 100),
                'model' => $faker->randomElement(['Dell Optiplex 7090', 'HP EliteDesk 800', 'Lenovo ThinkCentre M90']),
                'operating_system' => $faker->randomElement(['Windows 10 Pro', 'Ubuntu 20.04', 'macOS Big Sur']),
                'processor' => $faker->randomElement(['Intel Core i5', 'Intel Core i7', 'AMD Ryzen 5']),
                'memory' => $faker->numberBetween(4, 64),
                'available' => $faker->boolean, 
            ]);
        }
    }
}
