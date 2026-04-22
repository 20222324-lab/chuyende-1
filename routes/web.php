<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::resource('products', ProductController::class)->except(['show']);

Route::resource('employees', EmployeeController::class);
