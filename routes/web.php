<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('articles', 'App\Http\Controllers\ArticleController');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{ArticleId}', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove/{ArticleId}', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('cart.clear');
