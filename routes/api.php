<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);



// route logout agar bisa remove token must include middleware auth:sanctum
Route::middleware('auth:sanctum')->group(function () {
    // rooute logout
    Route::post('/logout', [AuthController::class, "logout"])->name('logout');

    //route product
    Route::apiResource('products', ProductController::class);

    // route search product api by product_name
    Route::get('products/search/product_name', [ProductController::class, 'searchbyName']);

    // route search product api by category
    Route::get('products/search/category', [ProductController::class, 'searchByCategory']);
});
