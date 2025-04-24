<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fasilitas;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fasilitas::create([
            'nama_fasilitas' => 'Wifi',
        ]);
        Fasilitas::create([
            'nama_fasilitas' => 'Kamar Mandi Dalam',
        ]);
        Fasilitas::create([
            'nama_fasilitas' => 'AC',
        ]);
        Fasilitas::create([
            'nama_fasilitas' => 'Kulkas',
        ]);
        Fasilitas::create([
            'nama_fasilitas' => 'Kasur',
        ]);
        Fasilitas::create([
            'nama_fasilitas' => 'Meja',
        ]);
        Fasilitas::create([
            'nama_fasilitas' => 'Kursi',
        ]);
        Fasilitas::create([
            'nama_fasilitas' => 'Lemari',
        ]);
        Fasilitas::create([
            'nama_fasilitas' => 'Dapur',
        ]);
        Fasilitas::create([
            'nama_fasilitas' => 'Kamar Mandi Bersama',
        ]);
        Fasilitas::create([
            'nama_fasilitas' => 'Parkir',
        ]);
        Fasilitas::create([
            'nama_fasilitas' => 'Keamanan 24 Jam',
        ]);
        Fasilitas::create([
            'nama_fasilitas' => 'Kolam Renang',
        ]);
        Fasilitas::create([
            'nama_fasilitas' => 'Gym',
        ]);
        Fasilitas::create([
            'nama_fasilitas' => 'Ruang Tamu',
        ]);
        Fasilitas::create([
            'nama_fasilitas' => 'Ruang Makan',
        ]);
        Fasilitas::create([
            'nama_fasilitas' => 'Ruang Santai',
        ]);
        Fasilitas::create([
            'nama_fasilitas' => 'Taman',
        ]);
        Fasilitas::create([
            'nama_fasilitas' => 'Laundry',
        ]);
        Fasilitas::create([
            'nama_fasilitas' => 'Kantin',
        ]);
        Fasilitas::create([
            'nama_fasilitas' => 'Ruang Serbaguna',
        ]);
        Fasilitas::create([
            'nama_fasilitas' => 'Area Bermain Anak',
        ]);
    }
}
