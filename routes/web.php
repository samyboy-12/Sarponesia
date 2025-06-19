<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Ini adalah route web untuk aplikasi kamu.
*/

// Auth Routes
Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'showRegisterForm')->name('registrasi');
    Route::post('/register', 'registerWeb');
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'loginWeb');
    Route::get('/password/reset', 'showForgotPasswordForm')->name('password.request');
    Route::post('/password/email', 'passwordEmail')->name('password.email');
    Route::get('/password/reset/{token}', 'passwordReset')->name('password.reset');
    Route::post('/password/reset', 'passwordUpdate')->name('password.update');
    Route::post('/logout', 'logoutWeb')->name('logout');
});

// Landing Page
Route::redirect('/', '/home');
Route::view('/home', 'LandingPage')->name('home')->middleware('auth');

// Static Pages
Route::view('/contact', 'Kontak')->name('contact');
Route::view('/program', 'Program')->name('program');
Route::view('/komunitas', 'Komunitas')->name('komunitas');
Route::view('/card', 'card')->name('card');
Route::view('/layanankebunkopi', 'layanankebunkopi')->name('layanankebunkopi');
Route::view('/katalog', 'katalog')->name('katalog');
Route::view('/subartikel', 'subArtikel')->name('SubArtikel');
Route::view('/artikel', 'artikel')->name('artikel');

// Blade File Routes
Route::view('/manajemen-artikel', 'manajemen_artikel')->name('manajemen-artikel');
Route::view('/manajemen-kerjasama', 'manajemen_kerjasama')->name('manajemen-kerjasama');
Route::view('/manajemen-layanan', 'manajemen_layanan')->name('manajemen-layanan');
Route::view('/manajemen-produk', 'manajemen_produk')->name('manajemen-produk');
Route::view('/order', 'order')->name('order');
Route::view('/reset', 'auth.Reset')->name('reset');
Route::view('/overviewproduk', 'pembelian.overviewproduk');
Route::view('/review', 'pembelian.review')->name('pembelian/review');
Route::view('/cart', 'pembelian.cart');