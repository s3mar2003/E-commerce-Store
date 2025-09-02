<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShopController;
use App\Http\Controllers\StoreController;

Route::get('/', [ShopController::class, 'index'])->name('home');

// صفحة المنتجات
Route::get('/products', [StoreController::class, 'products'])->name('products');

// تفاصيل منتج
Route::get('/product-details', [StoreController::class, 'productDetails'])->name('product.details');

// صفحة "عنّا"
Route::get('/about-us', [StoreController::class, 'aboutUs'])->name('about');
