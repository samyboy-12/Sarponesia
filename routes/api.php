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
use App\Http\Controllers\API\CartController;
use App\Http\Controllers\API\AddressController;
use App\Http\Controllers\API\PaymentMethodController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\OrderItemController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Public Routes
Route::apiResources([
    'categories' => CategoryController::class,
    'products' => ProductController::class,
    'articles' => ArticleController::class,
    'services' => ServiceController::class,
    'pertanyaan' => PertanyaanController::class,
    'reviews' => ReviewController::class,
    'payment-methods' => PaymentMethodController::class,
]);

// Authenticated Routes
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResources([
        'cart' => CartController::class,
        'addresses' => AddressController::class,
        'users' => UserController::class,
        'orders' => OrderController::class,
    ]);

    Route::apiResource('orders.order-items', OrderItemController::class)->except(['update', 'destroy']);

    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);
});

// Authentication Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/password/email', [AuthController::class, 'passwordEmail']);
Route::post('/password/reset', [AuthController::class, 'passwordUpdate']);