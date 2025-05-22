<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\ArticleController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Ini adalah route web untuk aplikasi kamu.
|
*/

// Route Landing Page
Route::get('/', fn() => redirect()->route('home'));
Route::get('/home', fn() => view('LandingPage'))->name('home');

// Halaman Statis
Route::view('/contact', 'Kontak')->name('contact');
Route::view('/program', 'Program')->name('program');
Route::view('/komunitas', 'Komunitas')->name('komunitas');
Route::view('/card', 'card')->name('card');
Route::view('/layanankebunkopi', 'layanankebunkopi')->name('layanankebunkopi');
Route::view('/katalog', 'katalog')->name('katalog');
Route::view('/subartikel', 'subArtikel')->name('SubArtikel');
Route::view('/artikel', 'artikel')->name('artikel');

// Route Form Auth (Login, Register, Reset)
Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/registrasi', 'showRegisterForm')->name('registrasi');
    Route::post('/registrasi', 'register');

    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login');

    Route::get('/reset', 'showForgotPasswordForm')->name('password.request');
    Route::post('/reset', 'passwordEmail');

    Route::get('/confirmreset/{token}', 'passwordReset')->name('password.reset');
    Route::post('/confirmreset', 'passwordUpdate')->name('password.update');

    Route::post('/logout', 'logout')->name('logout');
});

// Jasa
Route::controller(ServiceController::class)->group(function () {
    Route::get('/pelatihan', 'showPelatihan')->name('pelatihan');
    Route::get('/perawatan', 'showPerawatanKebun')->name('perawatan');
});


// Route ke file Blade di dalam folder 'file'
Route::get('/manajemen-artikel', function () {
    return view('manajemen_artikel');
})->name('manajemen-artikel');

Route::get('/manajemen-kerjasama', function () {
    return view('manajemen_kerjasama');
})->name('manajemen-kerjasama');

Route::get('/manajemen-layanan', function () {
    return view('manajemen_layanan');
})->name('manajemen-layanan');

Route::get('/manajemen-produk', function () {
    return view('manajemen_produk');
})->name('manajemen-produk');

Route::get('/order', function () {
    return view('order');
})->name('order');


/*
|--------------------------------------------------------------------------
| API Routes (gunakan /api prefix, disarankan di api.php)
|--------------------------------------------------------------------------
|
| Jika ini ditulis di web.php, tambahkan prefix 'api' atau pisahkan di routes/api.php.
| Laravel sudah menyediakan file khusus api.php untuk itu.
|
*/

// API Resource (gunakan di routes/api.php, bukan di sini)
Route::prefix('api')->group(function () {
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('products', ProductController::class);
    Route::apiResource('articles', ArticleController::class);
    Route::apiResource('users', UserController::class);
});
