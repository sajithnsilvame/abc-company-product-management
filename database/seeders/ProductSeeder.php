<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();


        $categoryName = DB::table('categories')->pluck('name')->toArray();

        foreach (range(1, 20) as $index) {
            DB::table('products')->insert([
                'title' => $faker->word,
                'product_category' => $faker->randomElement($categoryName),
            ]);
        }
    }
}
