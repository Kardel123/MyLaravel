<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;

Route::get('/hello', [HelloController::class, 'index']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/items', [ItemController::class, 'store'])->name('items.store');
Route::get('/inventory/create', [ItemController::class, 'create'])->name('items.create');
Route::post('/inventory', [ItemController::class, 'store'])->name('items.store');