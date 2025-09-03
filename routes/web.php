<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShopController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;

Route::get('/', [ShopController::class, 'index'])->name('home');

// صفحة المنتجات
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);


// تفاصيل منتج
Route::get('/product-details', [StoreController::class, 'productDetails'])->name('product.details');

// صفحة "عنّا"
Route::get('/about-us', [StoreController::class, 'aboutUs'])->name('about');
