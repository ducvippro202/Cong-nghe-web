<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class IssuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) { 
            DB::table('issues')->insert([
                'computer_id' => $faker->numberBetween(1, 50), 
                'reported_by' => $faker->optional()->name, 
                'reported_date' => $faker->dateTimeThisYear, 
                'description' => $faker->sentence(50), 
                'urgency' => $faker->randomElement(['Low', 'Medium', 'High']), 
                'status' => $faker->randomElement(['Open', 'In Progress', 'Resolved']), 
            ]);
        }
    }
}
