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
