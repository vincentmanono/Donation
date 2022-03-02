<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('companies', CompanyController::class);
Route::resource('products', ProductController::class);
// Route::resource('collections', DonorController::class);
ROute::post('accept/products/{product}',[ProductController::class,'acceptProduct'])->name('accept.product') ;
Route::get('collections',[ProductController::class,'acceptedProducts'])->name('acceptedProducts') ;
Route::get('send/email',[ProductController::class,'showRequestDonationView'])->name('showRequestDonationView') ;
Route::post('send/email',[ProductController::class,'requestDonation'])->name('requestDonation') ;