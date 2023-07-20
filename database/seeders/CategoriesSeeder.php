<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Sample data for seeding
        $categories = [
            [
                'name' => 'Clothes',
 
            ],
            [
                'name' => 'Accessories',

            ],
            // Add more products here
        ];

        // Insert the data into the 'categories' table
        foreach ($categories as $categoryData) {
            Category::create($categoryData);
        }
    }
}