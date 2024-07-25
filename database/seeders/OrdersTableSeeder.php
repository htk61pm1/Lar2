<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Product;


class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->delete();
        $faker = Faker::create();
        $product_ids = Product::all()->pluck('id')->toArray();
        for ($i = 0; $i < 100; $i++) {
        Order::create([
        'product_id' => $faker->randomElement($product_ids),
        'Customer_id' => $faker->randomElements($product_ids),
        'Quantity'=> $faker->numberBetween(1,5),
        'OrderDate'=> $faker->dateTime,
 ]);
    }
}
}