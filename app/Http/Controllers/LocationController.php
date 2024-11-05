<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LocationController extends Controller
{
    public function getProvinces()
    {
        $response = Http::get('https://api.binderbyte.com/wilayah/provinsi', [
            'api_key' => env("API_KEY"),
        ]);
        return $response->json();
    }
    public function getCities(string $provinceId)
    {
        $response = Http::get('https://api.binderbyte.com/wilayah/kabupaten', [
            'api_key' => env("API_KEY"),
            'id_provinsi' => $provinceId,
        ]);
        dd($response->json());
    }

    public function getDistricts(string $cityId)
    {
        $response = Http::get('https://api.binderbyte.com/wilayah/kecamatan', [
            'api_key' => env("API_KEY"),
            'id_kabupaten' => $cityId,
        ]);
        dd($response->json());
    }
    public function getVillages(string $districtId)
    {
        $response = Http::get('https://api.binderbyte.com/wilayah/kelurahan', [
            'api_key' => env("API_KEY"),
            'id_kecamatan' => $districtId,
        ]);
        dd($response->json());
    }
}