<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Sample data for seeding
        $users = [
            [
                'name' => 'rania',
                'email' => 'rania.chakroun@etudiant-enit.utm.tn',
                'role' => 'admin',
                'phone_number'=> '97488952',
                'adress'=> 'Route gremda km1',
                'password'=> 'admin123',
 
            ],

            // Add more users here
        ];

        // Insert the data into the 'users' table
        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}