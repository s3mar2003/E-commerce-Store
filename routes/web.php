<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShopController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;


Route::get('/', [ShopController::class, 'index'])->name('home');

// صفحة المنتجات
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

Route::get('/contact', function () {
    return view('shop.contact');
});
Route::post('/contact', [ContactController::class, 'submit']);




Route::get('/product-details', [StoreController::class, 'productDetails'])->name('product.details');

// صفحة "عنّا"
Route::get('/about-us', [StoreController::class, 'aboutUs'])->name('about');
