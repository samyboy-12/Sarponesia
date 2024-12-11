<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PertanyaanController;



// Routes untuk Login dan Register
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

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home',function(){
    return view('LandingPage'); })
    ->name('home');
// Routes untuk Produk
Route::controller(ProductController::class)->group(function () {
    Route::get('/benih-dan-pupuk', 'showBenihDanPupuk')->name('benihpupuk');
    Route::get('/benih', 'showBenihDanPupuk')->name('benih');
    Route::get('/peralatan', 'showPeralatan')->name('peralatan');
    Route::get('/alat', 'showPeralatan')->name('alat');
    Route::get('/kopi_produk', 'showCatalog')->name('kopi_produk');
    Route::get('/katalog', 'showCatalog')->name('katalog');
});

// Routes untuk Jasa
Route::controller(ServiceController::class)->group(function () {
    Route::get('/pelatihan', 'showPelatihan')->name('pelatihan');
    Route::get('/perawatan', 'showPerawatanKebun')->name('perawatan');
});

// Route untuk Artikel
Route::get('/artikel', [ArticleController::class, 'index'])->name('artikel');
Route::get('/subartikel',function(){
    return view('subArtikel'); })
    ->name('SubArtikel');


// Route untuk Pertanyaan Kebun
Route::post('/kirim-pertanyaan', [PertanyaanController::class, 'store'])->name('kirim.pertanyaan');

// Routes untuk Halaman Statis
Route::view('/contact', 'Kontak')->name('contact');
Route::view('/program', 'Program')->name('program');
Route::view('/komunitas', 'Komunitas')->name('komunitas');
Route::view('/card', 'card')->name('card');





