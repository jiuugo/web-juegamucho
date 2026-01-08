<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');

Route::get('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');
