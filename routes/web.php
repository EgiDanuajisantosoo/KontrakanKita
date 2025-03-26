<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('Authentikasi/login');
});

Route::get('/register', function () {
    return view('Authentikasi/register');
});

