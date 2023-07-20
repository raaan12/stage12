<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
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
        $faker = Faker::create();

        // Define the categories you want to associate the products with
        $categories = [2,1]; // Replace with your actual category IDs

        foreach (range(1, 20) as $index) {
            $name = $faker->unique()->word;
            $description = $faker->sentence;
            $price = $faker->randomFloat(2, 10, 100);
            $quantity = $faker->numberBetween(1, 100);
            $categoryId = $faker->randomElement($categories);

            // Generate a random image and save it in the storage directory
            $imagePath = $faker->image(storage_path('app/public/product_images'), 200, 200, 'products', false);

            DB::table('products')->insert([
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'quantity' => $quantity,
                'categoryId' => $categoryId,
                'photo' => 'product_images/' . basename($imagePath), // Save the relative path to the image
            ]);
        }
    }
}