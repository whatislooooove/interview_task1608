<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/api/get', [App\Http\Controllers\DummyApiController::class, 'getProducts'])->name('products.get');
