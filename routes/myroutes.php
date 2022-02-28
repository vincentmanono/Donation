<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('companies', CompanyController::class);
Route::resource('products', ProductController::class);
ROute::post('accept/products/{product}',[ProductController::class,'acceptProduct'])->name('accept.product') ;