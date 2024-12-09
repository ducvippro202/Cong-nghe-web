<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('movies')->insert([
                'title' => $faker->sentence,
                'director' => $faker->name,
                'release_date' => $faker->date(),
                'duration' => $faker->numberBetween(90, 180), // Thời lượng phim từ 90 đến 180 phút
                'cinema_id' => $faker->numberBetween(1, 10), // Giả sử có 10 cinemas
            ]);
        }
    }
}
