<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Made Aditya',
            'email' => 'imadeaditya4@gmail.com',
            'role' => 'customer',
            'image' => 'user.jpg'
        ]);
        User::factory()->create([
            'name' => 'Wahyu Pranata',
            'email' => 'wahyupranata@gmail.com',
            'role' => 'agent',
            'agency_id' => 1,
            'image' => 'user.jpg'
        ]);
    }
}
