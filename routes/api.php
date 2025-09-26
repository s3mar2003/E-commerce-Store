<?php 
use App\Http\Controllers\Api\v1\ProductController;
use App\Http\Controllers\Api\v1\CategoryController;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function () {
    Route::apiResource('products', ProductController::class)->middleware('throttle:60,1');
    Route::apiResource('categories', CategoryController::class)->middleware('throttle:60,1');

    Route::middleware('auth:sanctum')->group(function () {
        Route::apiResource('products', ProductController::class)->only(['store', 'update', 'destroy']);
        Route::apiResource('categories', CategoryController::class)->only(['store', 'update', 'destroy']);
    });
});