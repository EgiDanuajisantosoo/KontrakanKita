<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kontrakan;

class KontrakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kontrakan::create([
            'nama' => 'Kontrakan A',
            'alamat' => 'Jl. Raya No. 1',
            'harga' => 1000000,
            'deskripsi' => 'Kontrakan nyaman dan strategis.',
            'tipe_properti' => 'kontrakan',
            'kamar_tidur' => 2,
            'kamar_mandi' => 1,
            // 'fasilitas_umum' => 'Wifi, Parkir',
            'ukuran_properti' => 50,
            'provinsi' => 'Jawa Barat',
            'kota' => 'Bandung',
            'kecamatan' => 'Cidadap',
            'kelurahan' => 'Cipaganti',
            'latitude' => '-6.8951',
            'longitude' => '107.6102',
            'status' => 'tersedia',
            'user_id' => 1,
        ])->fasilitasUmum()->attach([1, 2]);


        Kontrakan::create([
            'nama' => 'Kontrakan B',
            'alamat' => 'Jl. Raya No. 2',
            'harga' => 1500000,
            'deskripsi' => 'Kontrakan luas dan nyaman.',
            'tipe_properti' => 'kontrakan',
            'kamar_tidur' => 3,
            'kamar_mandi' => 2,
            // 'fasilitas_umum' => 'Wifi, Parkir, AC',
            'ukuran_properti' => 70,
            'provinsi' => 'Jawa Barat',
            'kota' => 'Bandung',
            'kecamatan' => 'Cidadap',
            'kelurahan' => 'Cipaganti',
            'latitude' => '-6.884906',
            'longitude' => '107.710771',
            'status' => 'tersedia',
            'user_id' => 1,
        ])->fasilitasUmum()->attach([1, 2, 3]);


        kontrakan::create([
            'nama' => 'Kontrakan C',
            'alamat' => 'Jl. Raya No. 3',
            'harga' => 1200000,
            'deskripsi' => 'Kontrakan dekat dengan pusat kota.',
            'tipe_properti' => 'kontrakan',
            'kamar_tidur' => 2,
            'kamar_mandi' => 1,
            // 'fasilitas_umum' => 'Wifi, Parkir, AC, Kulkas',
            'ukuran_properti' => 60,
            'provinsi' => 'Jawa Barat',
            'kota' => 'Bandung',
            'kecamatan' => 'Cidadap',
            'kelurahan' => 'Cipaganti',
            'latitude' => '-6.972915',
            'longitude' => '107.635411',
            'status' => 'tersedia',
            'user_id' => 1,
        ])->fasilitasUmum()->attach([1, 2, 3, 4]);


    }
}
