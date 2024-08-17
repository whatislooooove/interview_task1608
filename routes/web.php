<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/api/get', [App\Http\Controllers\DummyApiController::class, 'getProducts'])->name('products.get');
Route::get('/form/add', [App\Http\Controllers\HomeController::class, 'addProduct'])->name('products.add.form');
Route::post('/api/add', [App\Http\Controllers\DummyApiController::class, 'addProduct'])->name('products.add');
