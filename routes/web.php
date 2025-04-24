<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\KontrakanController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use App\Models\Fasilitas;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('index');
});

// Route::get('/Kontrakan', function () {
//     return view('PencariKontrakan/Kontrakan');
// });
Route::get('/Kontrakan', [KontrakanController::class, 'index'])->name('kontrakan.index');

Route::get('/Forum', function () {
    return view('PencariKontrakan/Forum');
});


Route::get('/DetailKontrakan', function () {
    return view('User/DetailKontrakan');
});

Route::get('/KelolaKontrakan', function () {
    $fasilitas = Fasilitas::all();
    return view('PemilikKontrakan/KelolaKontrakan', compact('fasilitas'));
});

Route::get('/Setting', function () {
    return view('User/Setting');
});

Route::get('/auth/redirect/google', function () {
    return Socialite::driver('google')->redirect();
});



// Route::get('/auth/callback/google', function () {
//     $googleUser = Socialite::driver('google')->stateless()->user();

//     $user = User::updateOrCreate([
//         'email' => $googleUser->getEmail(),
//     ], [
//         'username' => Str::slug($googleUser->getName()) . rand(100, 999),
//         'google_id' => $googleUser->getId(),
//         'avatar' => $googleUser->getAvatar(),
//     ]);

//     Auth::login($user);

//     return redirect('/');
// });

Route::get('/formGalery', function () {
    return view('User.formGalery');
});

Route::get('formPemilik', function () {
    $fasilitas = Fasilitas::all();
    return view('PemilikKontrakan.formPemilik', compact('fasilitas'));
});

//Auth Routes
Route::get('/google', [AuthController::class, 'authGoogle'])->name('auth.google');
Route::get('/auth/callback/google', [AuthController::class, 'handleGoogleCallback'])->name('auth.google.callback');
Route::get('/auth', [AuthController::class, 'index'])->name('auth.index');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

//rekomendasi lokasi
Route::get('/rekomendasi-lokasi', [RekomendasiController::class, 'rekomendasiLokasi']);

//Profile user
Route::get('/Profile', [ProfileController::class, 'index'])->name('profile.index');
Route::post('/tambahGalery', [ProfileController::class, 'galery'])->name('profile.galery');
Route::post('/createProfile', [ProfileController::class, 'create'])->name('profile.create');

//tambah kontrakan
Route::post('/tambahKontrakan', [KontrakanController::class, 'store'])->name('kontrakan.store');




