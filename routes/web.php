<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ServiceController;

Route::view('/LandingPage', 'LandingPage')->name('home');

// Routes untuk Login dan Register
Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/register', 'showRegisterForm')->name('register');
    Route::post('/register', 'register');
    
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login');
    
    Route::get('/forgot-password', 'showForgotPasswordForm')->name('password.request');
    Route::post('/forgot-password', 'passwordEmail');
    Route::get('/reset-password/{token}', 'passwordReset')->name('password.reset');
    Route::post('/reset-password', 'passwordUpdate')->name('password.update');
    
    Route::post('/logout', 'logout')->name('logout');
});

// Routes untuk Produk
Route::controller(ProductController::class)->group(function () {
    Route::get('/benih-dan-pupuk', 'showBenihDanPupuk')->name('benihpupuk');
    Route::get('/peralatan', 'showPeralatan')->name('peralatan');
    Route::get('/katalog', 'showCatalog')->name('katalog');
});

// Routes untuk Jasa
Route::controller(ServiceController::class)->group(function () {
    Route::get('/pelatihan', 'showPelatihan')->name('pelatihan');
    Route::get('/perawatan', 'showPerawatanKebun')->name('perawatan');
});

// Route untuk Artikel
Route::get('/artikel', [ArticleController::class, 'index'])->name('articles');

// Routes untuk Halaman Statis
Route::view('/contact', 'Kontak')->name('contact');
// Route::view('/kopi_produk', 'Katalog')->name('kopi_produk');
Route::view('/program', 'Program')->name('program');
Route::view('/komunitas', 'Komunitas')->name('komunitas');
Route::view('/card', 'card')->name('card');




