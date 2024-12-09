<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // Seed dữ liệu cho bảng issues
        for ($i = 0; $i < 50; $i++) {
            DB::table('issues')->insert([
                'computer_id' => $faker->numberBetween(1, 30), // Tham chiếu đến computer_id (giả định có 30 máy)
                'reported_by' => $faker->optional()->name, // Người báo cáo (tùy chọn)
                'reported_date' => $faker->dateTimeBetween('-1 year', 'now'), // Thời gian báo cáo (1 năm trở lại đây)
                'description' => $faker->sentence, // Mô tả chi tiết vấn đề
                'urgency' => $faker->randomElement(['Low', 'Medium', 'High']), // Mức độ sự cố
                'status' => $faker->randomElement(['Open', 'In Progress', 'Resolved']), // Trạng thái sự cố
            ]);
        }
    }
}
