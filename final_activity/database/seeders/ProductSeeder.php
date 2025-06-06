<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
         DB::table('products')->truncate();
        Product::create([
            'name' => 'Wireless Bluetooth Headphones',
            'description' => 'High-quality wireless headphones with noise cancellation and 20-hour battery life.',
            'price' => 99.99,
        ]);

        Product::create([
            'name' => 'Smart Fitness Watch',
            'description' => 'Waterproof fitness tracker with heart rate monitor and GPS.',
            'price' => 150.00,
        ]);

        Product::create([
            'name' => 'Portable Phone Charger',
            'description' => 'Compact 10000mAh power bank for charging phones on the go.',
            'price' => 30.00,
        ]);

        Product::create([
            'name' => 'Ergonomic Office Chair',
            'description' => 'Adjustable ergonomic chair with lumbar support for all-day comfort.',
            'price' => 200.00,
        ]);

        Product::create([
            'name' => 'Stainless Steel Water Bottle',
            'description' => 'Insulated water bottle keeps drinks cold for 24 hours or hot for 12 hours.',
            'price' => 25.00,
        ]);
    }
}
