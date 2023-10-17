<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('user', UserController::class);
    Route::get('/change-password', [ChangePasswordController::class, 'showChangePassword'])->name('users.change-password');
    Route::post('/change-password', [ChangePasswordController::class, 'changePassword']);
    Route::resource('course', CourseController::class);
    Route::resource('order', OrderController::class);

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('home-page', HomePageController::class);
Route::resource('/homepage', HomeController::class);
Route::post('store/{id}', [CartController::class, 'store'])->name('cart.store')->middleware('auth.cart');
    Route::post('checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::get('/', [CartController::class, 'index'])->name('cart.index')->middleware('auth.cart');
    Route::delete('destroy/{id}', [CartController::class, 'destroy'])->name('cart.destroy');


require __DIR__.'/auth.php';
