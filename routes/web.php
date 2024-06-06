<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/products', [App\Http\Controllers\ProductController::class, 'create'])->name("product.list");

Route::post('/products/store', [App\Http\Controllers\ProductController::class, 'store'])->name("product.store");

Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create'])->name("product.create");

Route::get('/categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name("category.create");

Route::get('/categories/store', [App\Http\Controllers\CategoryController::class, 'store'])->name("category.store");

Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name("categories.list");