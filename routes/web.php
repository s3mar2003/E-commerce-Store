<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShopController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;

Route::get('/', [ShopController::class, 'index'])->name('home');

// صفحة المنتجات
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']); // لازم تجي قبل show
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::put('/products/{id}', [ProductController::class, 'update']);


Route::get('/product-details', [StoreController::class, 'productDetails'])->name('product.details');

// صفحة "عنّا"
Route::get('/about-us', [StoreController::class, 'aboutUs'])->name('about');
