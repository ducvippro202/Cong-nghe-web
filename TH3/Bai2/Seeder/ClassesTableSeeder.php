<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Seed dữ liệu cho bảng classes
        for ($i = 0; $i < 20; $i++) {
            DB::table('classes')->insert([
                'grade-level' => $faker->randomElement(['Pre-K', 'Kindergarten']), // Cấp độ lớp học
                'room_number' => $faker->regexify('[A-Z]{1}[0-9]{2}'), // Phòng học (VD: A01, B12)
            ]);
        }
    }
}
