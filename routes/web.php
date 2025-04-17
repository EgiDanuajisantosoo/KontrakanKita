<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
Route::get('/google', [AuthController::class, 'authGoogle'])->name('auth.google');
Route::get('/auth/callback/google', [AuthController::class, 'handleGoogleCallback'])->name('auth.google.callback');

Route::get('/auth', [AuthController::class, 'index'])->name('auth.index');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

