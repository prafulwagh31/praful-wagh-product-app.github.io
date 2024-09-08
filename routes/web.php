<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web'], function () {
    Route::get('register', [RegisterController::class, 'registration'])->name('admin.register');
    Route::post('register', [RegisterController::class, 'storeRegistration'])->name('admin.store-register');
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login-post');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');

    Route::get('show-product/{id}', [ProductController::class, 'show'])->name('show-product');
    Route::get('/', [ProductController::class, 'productList'])->name('list-product');

    Route::middleware(['auth'])->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::resource('/admin/products', ProductController::class)->only(['index', 'create', 'store', 'edit', 'update']);
    });
});
