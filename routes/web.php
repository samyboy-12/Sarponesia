<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('LandingPage');
});

Route::get('/login', function () {
    return view('auth.LoginPageUser');
});

Route::get('/peralatan', function () {
    return view('PerlengkapanProduksi_alat');
});

Route::get('/perawatan', function () {
    return view('JasaKebunKopi_perawatan');
});

Route::get('/katalog',function(){
    return view('Katalog');
});

Route::get('/contact',function(){
    return view('Kontak');
});

Route::get('/alat', function () {
    return view('PerlengkapanProduksi_alat');
})->name('alat');

Route::get('/pelatihan', function () {
    return view('Pelatihan');
})->name('pelatihan');

Route::get('/benih', function () {
    return view('Benih&Pupuk');
})->name('benih');

Route::get('/kopi_produk', function () {
    return view('Katalog');
})->name('kopi_produk');


Route::get('/benihpupuk',function(){
    return view('Benih&Pupuk');
});


Route::get('/pelatihan',function(){
    return view('Pelatihan');
})->name('pelatihan');

Route::get('/artikel',function(){
    return view('Artikel');
});

Route::get('/program',function(){
    return view('Program');
});

Route::get('/komunitas',function(){
    return view('Komunitas');
});

Route::get('/registrasi',function(){
    return view('auth.Registrasi');
});

Route::get('/reset',function(){
    return view('auth.Reset');
});

Route::get('/confirmreset',function(){
    return view('auth.ConfirmReset');
});