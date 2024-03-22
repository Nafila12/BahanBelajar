<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\ProdukController;
use App\Models\Pelanggan;

// use App\Http\Controllers\HomeController;

Route::get('/home',[DashboardController::class,'admin']);
Route :: get('/',[DashboardController::class,'home']);
Route :: get('/blog',[DashboardController::class,'blog']);
Route::get('/profile',[DashboardController::class,'profile']);
Route::get('/contact',[DashboardController::class,'contact']);
Route::resource('/pelanggan',PelangganController::class);
Route::resource('/produk',ProdukController::class);
Route::resource('/pemasok',PemasokController::class);
