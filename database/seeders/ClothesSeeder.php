<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Color;
use App\Models\Size;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

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
                'categoryId' => 1,
                'photo' => 'product4.jpg',
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description for Product 2',
                'price' => 29.99,
                'categoryId' => 1,
                'photo' => 'product42.jpg',
            ],
            // Add more products here
        ];

        foreach ($products as $productData) {
            $product = Product::create($productData);
            
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
            
            // Associate sizes and colors with the product using the pivot table
            $sizes = Size::all();
            $colors = Color::all();
            foreach ($sizes as $size) {
                foreach ($colors as $color) {
                    $product->size()->attach($size, ['color_id' => $color->id, 'quantity' => rand(1, 10)]);
                }
            }
        }
    }
}
