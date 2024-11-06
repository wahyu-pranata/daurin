<?php

namespace Database\Seeders;

use App\Models\Item;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Address;
use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
        DB::table("agencies")->insert([
            "name" => "Agen 2",
            "image" => "somewhere/something.jpg",
            "ktp_number" => 1234567812345678,
            "ktp_image" => "somwhere/something.jpg",
            "surat_kepemilikan_image" => "somwhere/something.pdf",
            "address" => "Jalan Melati, Gg. Guanjiwa",
            "province" => "Bali",
            "city" => "Denpasar",
            "district" => "Denpasar Timur",
            "village" => "Kesiman",
            "postal_code" => "80237"
        ]);

        DB::table("items")->insert([
            "name" => "Kardus",
            "base_price" => 1000,
            "top_price" => 2000,
            "unit" => "kg",
            "agency_id" => 1
        ]);
        DB::table("items")->insert([
            "name" => "Botol",
            "base_price" => 1000,
            "top_price" => 2000,
            "unit" => "kg",
            "agency_id" => 1
        ]);
        DB::table("items")->insert([
            "name" => "Kaleng Minuman",
            "base_price" => 2000,
            "top_price" => 5000,
            "unit" => "kg",
            "agency_id" => 1
        ]);
        DB::table("items")->insert([
            "name" => "Kardus",
            "base_price" => 1000,
            "top_price" => 2000,
            "unit" => "kg",
            "agency_id" => 2
        ]);
        DB::table("items")->insert([
            "name" => "Kertas/Buku",
            "base_price" => 500,
            "top_price" => 2000,
            "unit" => "kg",
            "agency_id" => 2
        ]);
        DB::table("items")->insert([
            "name" => "Kaleng Besar",
            "base_price" => 3000,
            "top_price" => 5000,
            "unit" => "kg",
            "agency_id" => 2
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

        Address::create([
            "address" => "Jalan Cendrawasih, Gg. Guanjiwa",
            "province" => "Bali",
            "city" => "Denpasar",
            "district" => "Denpasar Timur",
            "village" => "Kesiman",
            "postal_code" => "80237",
            "is_home" => true,
            "name" => "Rumah Saya",
            "user_id" => 1
        ]);

        Address::create([
            "address" => "Jalan Mawar, Gg. Guanjiwa",
            "province" => "Bali",
            "city" => "Denpasar",
            "district" => "Denpasar Barat",
            "village" => "Tegal Harum",
            "postal_code" => "80117",
            "is_home" => true,
            "name" => "Kantor Saya",
            "user_id" => 1
        ]);

        Item::create([
            'name' => 'Botol Plastik',
            'base_price' => 1700,
            'top_price' => 2000,
            'unit' => 'kg',
            'agency_id' => 1
        ]);
        Item::create([
            'name' => 'Kertas Bekas',
            'base_price' => 150,
            'top_price' => 300,
            'unit' => 'rim',
            'agency_id' => 1
        ]);
        Item::create([
            'name' => 'Botol Plastik',
            'base_price' => 1100,
            'top_price' => 1900,
            'unit' => 'kg',
            'agency_id' => 2
        ]);

        $order1 = Order::create([
            'id' => Str::uuid(),
            'delivery_option' => 'dijemput',
            'user_id' => 1,
            'agency_id' => 1,
            'address_id' => 1,
            'ship_date' => now()
        ]);
        $order2 = Order::create([
            'id' => Str::uuid(),
            'delivery_option' => 'dijemput',
            'user_id' => 1,
            'agency_id' => 2,
            'address_id' => 1,
            'ship_date' => now()
        ]);
    }
}
