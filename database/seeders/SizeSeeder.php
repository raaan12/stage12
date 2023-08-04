<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;


class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Sample data for seeding
        $sizes = [
            [
                'name' => 'S',
            ],
            [
                'name' => 'XS',
            ],            [
                'name' => 'M',
            
            ],            [
                'name' => 'L',
            ],
            [
                'name' => 'XL',
            ],
            [
                'name' => 'XXL',
            ],

            // Add more products here
        ];
    
 // Insert the data into the 'categories' table
 foreach ($sizes as $sizeData) {
    Size::create($sizeData);
}
    }
}