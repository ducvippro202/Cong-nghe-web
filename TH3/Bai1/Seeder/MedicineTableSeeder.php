<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MedicineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Seed dữ liệu cho bảng medicines
        for ($i = 0; $i < 50; $i++) {
            DB::table('medicines')->insert([
                'name' => $faker->word,
                'brand' => $faker->company,
                'dosage' => $faker->randomElement(['10mg', '50mg', '100mg']),
                'form' => $faker->randomElement(['Viên nén', 'Xi-rô', 'Viên nang']),
                'price' => $faker->randomFloat(2, 10, 500), // Giá từ 10 đến 500
                'stock' => $faker->numberBetween(1, 100), // Số lượng từ 1 đến 100
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Seed dữ liệu cho bảng sales
        for ($i = 0; $i < 100; $i++) {
            DB::table('sales')->insert([
                'medicine_id' => $faker->numberBetween(1, 50), // Tham chiếu đến medicine_id (giả sử có 50 thuốc)
                'quantity' => $faker->numberBetween(1, 20), // Số lượng thuốc bán ra từ 1-20
                'sale_date' => $faker->dateTimeBetween('-1 year', 'now'), // Ngày bán từ 1 năm trước đến hiện tại
                'customer_phone' => $faker->optional()->numerify('##########'), // Số điện thoại khách hàng
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
