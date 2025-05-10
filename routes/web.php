<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\KontrakanController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\MessageController;
use App\Models\User;
use App\Models\Kontrakan;
use App\Models\Fasilitas;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('index');
});

// Route::get('/Kontrakan', function () {
//     return view('PencariKontrakan/Kontrakan');
// });
Route::get('/Kontrakan', [KontrakanController::class, 'index'])->name('kontrakan.index');

// Route::get('/Forum', function () {
//     return view('PencariKontrakan/Forum');
// });


// Route::get('/DetailKontrakan', function () {
//     return view('User/DetailKontrakan')->name('detail.kontrakan');
// });
Route::get('/detailKontrakan/{id}/nonForum',[KontrakanController::class, 'showNonForum'])->name('detail.kontrakan');
Route::get('/detailKontrakan/{id}/forum',[KontrakanController::class, 'showForum'])->name('detail.kontrakanForum');


Route::get('/KelolaKontrakan', function () {
    $fasilitas = Fasilitas::all();
    $kontrakan = Kontrakan::where('user_id',Auth::id())->get();
    // dd($kontrakan);
    return view('PemilikKontrakan/KelolaKontrakan', compact('fasilitas', 'kontrakan'));
});

Route::get('/Setting', function () {
    $user = Auth::user();
    return view('User.Setting', compact('user'));
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

Route::get('/formPemilik', function () {
    $fasilitas = Fasilitas::all();
    return view('PemilikKontrakan.formPemilik', compact('fasilitas'));
});


Route::get('/forums', [GroupController::class, 'index']);
Route::middleware('auth')->group(function () {
    Route::get('/forums/create', [GroupController::class, 'create']);
    Route::post('/forums', [GroupController::class, 'store']);
    Route::get('/forums/{id}', [GroupController::class, 'show']);
    Route::post('/forums/{id}/messages', [GroupController::class, 'sendMessage']);
    Route::get('/forums/{id}/add-user', [GroupController::class, 'addUserForm']);
    Route::post('/forums/{id}/gabungGroup', [GroupController::class, 'gabungGroup']);
});

//Auth Routes
Route::get('/google', [AuthController::class, 'authGoogle'])->name('auth.google');
Route::get('/auth/callback/google', [AuthController::class, 'handleGoogleCallback'])->name('auth.google.callback');
Route::get('/auth', [AuthController::class, 'index'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

//rekomendasi lokasi
Route::get('/rekomendasi-lokasi', [RekomendasiController::class, 'rekomendasiKontrakan']);

//Profile user
Route::get('/Profile', [ProfileController::class, 'index'])->name('profile.index');
Route::post('/tambahGalery', [ProfileController::class, 'galery'])->name('profile.galery');
Route::post('/createProfile', [ProfileController::class, 'create'])->name('profile.create');

//tambah kontrakan
Route::post('/tambahKontrakan', [KontrakanController::class, 'store'])->name('kontrakan.store');


//admin
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('settings/profile', [ProfileController::class, 'editProfile'])->name('settings.profile');
    Route::post('settings/profile', [ProfileController::class, 'updateProfile'])->name('settings.profile.update');
    Route::get('settings/password', [ProfileController::class, 'editPassword'])->name('settings.password');
    Route::post('settings/password', [ProfileController::class, 'updatePassword'])->name('settings.password.update');
});




