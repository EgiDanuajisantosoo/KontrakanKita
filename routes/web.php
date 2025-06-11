<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\KontrakanController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\AdminController;
use App\Models\Kontrakan;
use App\Models\Fasilitas;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


Route::get('/', function () {
    return view('index');
});

Route::get('/lupaPassword' , function () {
    return view('User.lupaPassword');
});

Route::get('/filter-kontrakan', [KontrakanController::class, 'filterKontrakan']);

Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('auth.resetPassword');


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
Route::get('/detailKontrakan/{id}/nonForum',[KontrakanController::class, 'showNonForum'])->name('detail.kontrakanNonForum');
Route::get('/detailKontrakan/{id}/forum',[KontrakanController::class, 'showForum'])->name('detail.kontrakanForum');
Route::post('/detailKontrakan/{id}/forum',[KontrakanController::class, 'bookingForum'])->name('booking.kontrakanForum');
Route::post('/detailKontrakan/{id}/nonForum',[KontrakanController::class, 'bookingNonForum'])->name('booking.kontrakanNonForum');
Route::post('/detailKontrakan/{id}/batal',[KontrakanController::class, 'batalBooking'])->name('booking.Batal');


Route::get('/KelolaKontrakan', function () {
    $fasilitas = Fasilitas::all();
    $kontrakan = Kontrakan::where('user_id',Auth::id())->where('status', 'tersedia')->get();
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

Route::get('/formGalery', function () {
    return view('User.formGalery');
});


Route::delete('/galeri/{id}', [ProfileController::class, 'deleteGaleri'])->name('galeri.destroy');


Route::get('/Pembayaran', function () {
    return view('User.Pembayaran');
});


Route::get('/ProfileSementara', function () {
    return view('User.ProfileSementara');
});

Route::get('/DetailKontrakanSementara', function () {
    return view('User.DetailKontrakanSementara');
});

Route::get('/VerifikasiPemilikKontrakan', function () {
    return view('PemilikKontrakan.VerifikasiPemilikKontrakan');
});

Route::get('/verifikasiBooking', [KontrakanController::class, 'verifikasiBooking'])->name('booking.verifikasi');
Route::get('/terimaBooking/{id}', [KontrakanController::class, 'terimaBooking'])->name('booking.terima');
Route::get('/tolakBooking/{id}', [KontrakanController::class, 'tolakBooking'])->name('booking.tolak');

Route::get('/formPemilik', function () {
    $fasilitas = Fasilitas::all();
    return view('PemilikKontrakan.formPemilik', compact('fasilitas'));
});

Route::get('/formPemilik/{id}', function ($id) {
    $fasilitas = Fasilitas::all();
    $kontrakan = Kontrakan::findOrFail($id);
    return view('PemilikKontrakan.editFormPemilik', compact('fasilitas','kontrakan'));
});


Route::get('/filter-forum', [ForumController::class, 'filter'])->name('forums.filter');
Route::get('/forums', [GroupController::class, 'index']);
Route::middleware('auth')->group(function () {
    Route::get('/forums/create', [GroupController::class, 'create']);
    Route::post('/forums', [GroupController::class, 'store']);
    Route::get('/forums/{id}', [GroupController::class, 'show'])->name('forums.show');
    Route::post('/forums/{id}/messages', [GroupController::class, 'sendMessage']);
    Route::get('/forums/{id}/add-user', [GroupController::class, 'addUserForm']);
    Route::post('/forums/{id}/gabungGroup', [GroupController::class, 'gabungGroup']);
    Route::post('/forums/{id}/terimaUser', [GroupController::class, 'terimaUser'])->name('terimaUser');
});



//Auth Routes
Route::get('/google', [AuthController::class, 'authGoogle'])->name('auth.google');
Route::get('/auth/callback/google', [AuthController::class, 'handleGoogleCallback'])->name('auth.google.callback');
Route::get('/auth', [AuthController::class, 'index'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');


Route::post('/kirimDp', [TransaksiController::class, 'kirimDp'])->name('transkasi.dp');
Route::post('/kirimPelunasan', [TransaksiController::class, 'kirimPelunasan'])->name('transkasi.pelunasan');

//rekomendasi lokasi
Route::get('/rekomendasi-lokasi', [RekomendasiController::class, 'rekomendasiKontrakan']);
Route::get('/rekomendasi-forum', [RekomendasiController::class, 'rekomendasiForum']);

//Profile user
Route::get('/Profile', [ProfileController::class, 'index'])->name('profile.index');
Route::post('/tambahGalery', [ProfileController::class, 'galery'])->name('profile.galery');
Route::post('/createProfile', [ProfileController::class, 'create'])->name('profile.create');
Route::put('/updateProfile', [ProfileController::class, 'update'])->name('profile.update');

//tambah kontrakan
Route::post('/tambahKontrakan', [KontrakanController::class, 'store'])->name('kontrakan.store');
Route::post('/editKontrakan/{id}', [KontrakanController::class, 'update'])->name('kontrakan.update');


//admin
// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('/pengajuan', [AdminController::class, 'pengajuan'])->name('pengajuan-kontrakan');
Route::get('/transaksiDp', [AdminController::class, 'transaksiDp'])->name('pembayaran-dp');
Route::get('/detaltransaksiDp/{id}', [AdminController::class, 'detaltransaksiDp'])->name('admin.detailtransaksiDp');
Route::get('/transaksiPelunasan', [AdminController::class, 'transaksiDp'])->name('pembayaran-pelunasan');
Route::get('/detaltransaksiPelunasan/{id}', [AdminController::class, 'detaltransaksiDp'])->name('admin.detailtransaksiPelunasan');
Route::post('/terimaDp/{id}', [AdminController::class, 'terimaDp'])->name('terimaDp');
Route::post('/pengajuan/{id}', [AdminController::class, 'terimaKontrakan'])->name('terimaKontrakan');

Route::middleware(['auth'])->group(function () {
    Route::get('settings/profile', [ProfileController::class, 'editProfile'])->name('settings.profile');
    Route::post('settings/profile', [ProfileController::class, 'updateProfile'])->name('settings.profile.update');
    Route::get('settings/password', [ProfileController::class, 'editPassword'])->name('settings.password');
    Route::post('settings/password', [ProfileController::class, 'updatePassword'])->name('settings.password.update');
});




