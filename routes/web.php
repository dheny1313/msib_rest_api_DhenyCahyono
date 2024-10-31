<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// testing
// route search product api by product_name
// Route::get('products/search/product_name', [ProductController::class, 'searchbyName']);

// route search product api by category
// Route::get('products/search/category', [ProductController::class, 'searchByCategory']);