<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClothesSeeder extends Seeder
{
    public function run()
    {
        // Sample data for seeding
        $products = [
            [
                'name' => 'Product 1',
                'description' => 'Description for Product 1',
                'price' => 29.99,
                'quantity' => 100,
                'categoryId' => 1,
                'photo' => 'product1.jpg',
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description for Product 2',
                'price' => 19.99,
                'quantity' => 50,
                'categoryId' => 1,
                'photo' => 'product2.jpg',
            ],
            // Add more products here
        ];

        // Insert the data into the 'products' table
        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
