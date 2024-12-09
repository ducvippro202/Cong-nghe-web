<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class LibrariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) { // Giả sử có 10 thư viện
            DB::table('libraries')->insert([
                'name' => $faker->company . ' Library', // Tên thư viện
                'address' => $faker->address,         // Địa chỉ thư viện
                'contact_number' => $faker->phoneNumber, // Số điện thoại liên hệ
            ]);
        }
    }
}
