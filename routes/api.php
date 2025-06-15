<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\ArticleController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ServiceController;
use App\Http\Controllers\API\PertanyaanController;
use App\Http\Controllers\API\ReviewController;
use App\Http\Controllers\API\AuthController; 

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Semua route API berikut juga akan otomatis berada di /api/*
Route::apiResources([
    'categories' => CategoryController::class,
    'products' => ProductController::class,
    'articles' => ArticleController::class,
    'users' => UserController::class,
    'services' => ServiceController::class,
    'pertanyaan' => PertanyaanController::class,
    'reviews' => ReviewController::class,
]);

// Authentication Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:api')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);
});
Route::post('/password/email', [AuthController::class, 'passwordEmail']);
Route::post('/password/reset', [AuthController::class, 'passwordUpdate']);
