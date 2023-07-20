<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Support\Facades\File;

use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClothesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
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
                'photo' => 'product4.jpg', // Replace with the actual image filename for Product 1
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description for Product 1',
                'price' => 29.99,
                'quantity' => 100,
                'categoryId' => 1,
                'photo' => 'product42.jpg', // Replace with the actual image filename for Product 1
            ],            [
                'name' => 'Product 3',
                'description' => 'Description for Product 1',
                'price' => 29.99,
                'quantity' => 100,
                'categoryId' => 1,
                'photo' => 'product43.jpg', // Replace with the actual image filename for Product 1
            ],            [
                'name' => 'Product 4',
                'description' => 'Description for Product 1',
                'price' => 29.99,
                'quantity' => 100,
                'categoryId' => 1,
                'photo' => 'product45.jpg', // Replace with the actual image filename for Product 1
            ],
            [
                'name' => 'Product 5',
                'description' => 'Description for Product 1',
                'price' => 29.99,
                'quantity' => 100,
                'categoryId' => 1,
                'photo' => 'product41.jpg',// Replace with the actual image filename for Product 2
            ],
            [
                'name' => 'Product 6',
                'description' => 'Description for Product 1',
                'price' => 29.99,
                'quantity' => 100,
                'categoryId' => 1,
                'photo' => 'product3.png', // Replace with the actual image filename for Product 1
            ],
            // Add more products here
        ];
    
        foreach ($products as $productData) {
            // Get the full path to the image in the product_images folder
            $imagePath = storage_path('app/public/product_images/' . $productData['photo']);
    
            // Check if the image exists in the storage
            if (File::exists($imagePath)) {
                // Create the product and save it to the database
                $product = new Product($productData);
                $product->photo = 'product_images/' . $productData['photo']; // Save the relative path to the image
                $product->save();
            } else {
                // Image not found, handle error if needed
                // For now, we'll just skip this product
                continue;
            }
        }
    }
}