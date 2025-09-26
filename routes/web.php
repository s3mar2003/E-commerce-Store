<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use App\Notifications\NewOrderNotification;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'can:access-admin-panel'])
    ->prefix('admin')
    ->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
        // Route::get('/products', [AdminController::class, 'products'])->name('products.index');
        Route::get('/categories', [AdminController::class, 'categories'])->name('categories.index');
    });

    Route::middleware(['auth', 'can:access-admin-panel'])
    ->prefix('admin')
    ->group(function () {
        Route::get('/products', [ProductController::class, 'index']);
    });

    Route::get('/test-mail', function () {
    $user = User::first();

    Mail::to($user->email)->send(new WelcomeEmail($user));

    $user->notify(new NewOrderNotification((object)['id'=>123,'total'=>250]));

    return 'Mail and Notification sent!';
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
