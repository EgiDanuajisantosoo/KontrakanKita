<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function () {
    return view('index');
});

Route::get('/Kontrakan', function () {
    return view('PencariKontrakan/Kontrakan');
});

Route::get('/Forum', function () {
    return view('PencariKontrakan/Forum');
});


Route::get('/Profile', function () {
    return view('User/Profile');
});


Route::get('/DetailKontrakan', function () {
    return view('User/DetailKontrakan');
});

Route::get('/KelolaKontrakan', function () {
    return view('PemilikKontrakan/KelolaKontrakan');
});

Route::get('/Setting', function () {
    return view('User/Setting');
});

Route::get('/auth', [AuthController::class, 'index'])->name('auth.index');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

