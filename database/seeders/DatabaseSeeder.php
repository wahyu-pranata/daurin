<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table("agencies")->insert([
            "name" => "Agen 1",
            "image" => "somewhere/something.jpg",
            "ktp_number" => 1234567812345678,
            "ktp_image" => "somwhere/something.jpg",
            "surat_kepemilikan_image" => "somwhere/something.pdf",
            "address" => "Jalan jalan, Gg. Guanjiwa",
            "province" => "Bali",
            "city" => "Denpasar",
            "district" => "Denpasar Timur",
            "village" => "Kesiman",
            "postal_code" => "80237"
        ]);

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
