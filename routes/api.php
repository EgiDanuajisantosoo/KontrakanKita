<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LokasiController;


Route::get('/provinces', [LokasiController::class, 'getProvinces']);
Route::get('/regencies/{id}', [LokasiController::class, 'getRegencies']);
Route::get('/districts/{id}', [LokasiController::class, 'getDistricts']);
Route::get('/villages/{id}', [LokasiController::class, 'getVillages']);
