<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('donors', DonorController::class);
// Route::get('/donors',[DonorController::class,'index'])->name('donors.index');
// Route::get('/donor/{id}',[DonorController::class,'show'])->name('donors.show');



// client pages
Route::get('/',[PageController::class,'index'])->name('index');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/services',[PageController::class,'services'])->name('services');

Route::middleware(['auth'])->group(function(){
Route::resource('donors',DonorController::class);
    // edit user profile
Route::get('/userEdit/{id}',[PageController::class,'edit'])->name('user.edit');
Route::put('/userUpdate/{id}',[PageController::class,'update'])->name('user.update');
Route::get('/users',[PageController::class, 'users'])->name('user.index');
Route::delete('user/{id}',[PageController::class, 'destroy'])->name('user.delete');


Route::resource('companies', CompanyController::class);
Route::resource('products', ProductController::class);
Route::resource('companies', CompanyController::class);
// Route::resource('collections', DonorController::class);
ROute::post('accept/products/{product}',[ProductController::class,'acceptProduct'])->name('accept.product') ;
Route::get('collections',[ProductController::class,'acceptedProducts'])->name('acceptedProducts') ;
Route::get('send/email',[ProductController::class,'showRequestDonationView'])->name('showRequestDonationView') ;
Route::post('send/email',[ProductController::class,'requestDonation'])->name('requestDonation') ;



});


