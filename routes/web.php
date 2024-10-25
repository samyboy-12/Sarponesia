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

Route::get('/perlengkapanproduksi', function () {
    return view('PerlengkapanProduksi');
});