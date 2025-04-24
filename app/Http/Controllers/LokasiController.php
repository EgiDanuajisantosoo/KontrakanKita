<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
        public function getProvinces()
        {
            $response = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
            return response()->json($response->json());
        }

        // Mendapatkan data kabupaten/kota berdasarkan ID provinsi
        public function getRegencies($id)
        {
            $response = Http::get("https://www.emsifa.com/api-wilayah-indonesia/api/regencies/{$id}.json");
            return response()->json($response->json());
        }

        // Mendapatkan data kecamatan berdasarkan ID kabupaten/kota
        public function getDistricts($id)
        {
            $response = Http::get("https://www.emsifa.com/api-wilayah-indonesia/api/districts/{$id}.json");
            return response()->json($response->json());
        }

        // Mendapatkan data kelurahan/desa berdasarkan ID kecamatan
        public function getVillages($id)
        {
            $response = Http::get("https://www.emsifa.com/api-wilayah-indonesia/api/villages/{$id}.json");
            return response()->json($response->json());
    }
}

