<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ComputerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Seed dữ liệu cho bảng computers
        for ($i = 0; $i < 30; $i++) {
            DB::table('computers')->insert([
                'computer_name' => $faker->regexify('Lab[0-9]{1,2}-PC[0-9]{1,2}'), // Tên máy tính (VD: Lab1-PC05)
                'model' => $faker->randomElement(['Dell Optiplex 7090', 'HP ProDesk 400', 'Lenovo ThinkCentre M720']), // Tên phiên bản
                'operating_system' => $faker->randomElement(['Windows 10 Pro', 'Ubuntu 22.04', 'macOS Monterey']), // Hệ điều hành
                'processor' => $faker->randomElement(['Intel Core i5-11400', 'Intel Core i7-12700', 'AMD Ryzen 5 5600X']), // Bộ vi xử lý
                'memory' => $faker->numberBetween(4, 64), // RAM từ 4GB đến 64GB
                'available' => $faker->boolean, // Trạng thái hoạt động (true/false)
            ]);
        }
    }
}
