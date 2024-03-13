<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/addpart',[App\Http\Controllers\ProductController::class, 'addproduct'])->name('addpart');

Route::get('/checkout',[App\Http\Controllers\ProductController::class,'addpurchase'])->name('checkout');

Route::get('/editpart',[App\Http\Controllers\ProductController::class,'editproduct'])->name('editpart');

Route::get('/inventory',[App\Http\Controllers\ProductController::class,'inventoryreport'])->name('inventory');

Route::get('/details',[App\Http\Controllers\ProductController::class,'productdetails'])->name('details');

Route::get('/all',[App\Http\Controllers\ProductController::class,'productlist'])->name('all');

Route::get('/checkout-history',[App\Http\Controllers\ProductController::class,'purchaselist'])->name('checkout-history');

Route::get('/suppliers',[App\Http\Controllers\HomeController::class,'supplierlist'])->name('suppliers');