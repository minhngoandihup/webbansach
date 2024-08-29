<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\Products;
use Faker\Factory as Faker;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=0; $i < 50; $i++) { 
            Products::create([
                'name' => $faker->word,
                'image' => 'hinh' .$i . '.jpg',
                'description' => $faker->sentence,
                'price' => $faker->randomFloat(2, 10, 100),
                'sold' => $faker->numberBetween(1, 100),
                'view' => $faker->numberBetween(1, 100),
                'quantity' => $faker->numberBetween(1, 100),
                'category_id' => $faker->numberBetween(1, 10),
                
            ]);
        }
    }
}
