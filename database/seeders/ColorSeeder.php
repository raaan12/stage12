<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Sample data for seeding
        $colors = [
            [
                'name' => 'Red',
            ],
            [
                'name' => 'Green',
            ],            [
                'name' => 'Black',
            
            ],            [
                'name' => 'Yellow',
            ],
            [
                'name' => 'White',
            ],
            [
                'name' => 'Pink',
            ],
            // Add more products here
        ];
    
 // Insert the data into the 'categories' table
 foreach ($colors as $colorData) {
    Color::create($colorData);
}
    }
}
