<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard/articles', [App\Http\Controllers\ArticleController::class, 'indexAdmin'])->name('dashboard.articles');


Auth::routes();

Route::resource('articles', 'App\Http\Controllers\ArticleController');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{ArticleId}', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
Route::delete('/cart/remove/{ArticleId}', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
Route::delete('/cart/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('cart.clear');


Route::resource('orders', 'App\Http\Controllers\OrderController');
Route::post('/orders/create', [App\Http\Controllers\OrderController::class, 'store'])->name('order.store');


Route::get('/articulos', [App\Http\Controllers\ArticleController::class, 'index'])->name('articles');
