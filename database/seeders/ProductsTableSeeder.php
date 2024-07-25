<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->delete();
          $faker = Faker::create();
          for ($i = 0; $i < 50; $i++) {
          Product::create([
          'ProductName' => $faker->name,
          'Description' => $faker->sentence,
          'Price' => $faker-> numberBetween(100,10000),
          'stockQuantity'=> $faker->numberBetween(1,2000),
 ]);

    }
}
}
