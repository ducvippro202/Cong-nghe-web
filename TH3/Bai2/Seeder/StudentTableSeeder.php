<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Seed dữ liệu cho bảng students
        for ($i = 0; $i < 50; $i++) {
            DB::table('students')->insert([
                'first_name' => $faker->firstName, // Tên học sinh
                'last_name' => $faker->lastName, // Họ đệm
                'date_of_birth' => $faker->date('Y-m-d', '-10 years'), // Ngày sinh (giả định từ 10 năm trước)
                'parent_phone' => $faker->optional()->numerify('##########'), // Số điện thoại phụ huynh (tùy chọn)
                'class_id' => $faker->numberBetween(1, 20), // Tham chiếu đến class_id (giả sử có 20 lớp)
            ]);
        }
    }
}
