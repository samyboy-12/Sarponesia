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


Route::get('/benihpupuk',function(){
    return view('Benih&Pupuk');
});


Route::get('/pelatihan',function(){
    return view('Pelatihan');
});

Route::get('/artikel',function(){
    return view('Artikel');
});

Route::get('/program',function(){
    return view('Program');
});

Route::get('/komunitas',function(){
    return view('Komunitas');
});
