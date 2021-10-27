<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;
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
Route::redirect('/', 'index');
Route::get('index', function () {return view('index');});
/*
----------------------------------------------------------------------------
Companies
----------------------------------------------------------------------------
*/
Route::get('companies',[CompaniesController::class, 'index'])->name('companies.index');
Route::get('companies/create',[CompaniesController::class, 'create'])->name('companies.create');
Route::get('companies/{id}',[CompaniesController::class, 'show'])->name('companies.show');
Route::post('companies',[CompaniesController::class, 'store'])->name('companies.store');
Route::delete('companies/{id}',[CompaniesController::class, 'destroy'])->name('companies.destroy');
Route::get('companies/edit/{id}',[CompaniesController::class, 'edit'])->name('companies.edit');
Route::put('companies/{id}',[CompaniesController::class, 'update'])->name('companies.update');
/*
----------------------------------------------------------------------------
Products
----------------------------------------------------------------------------
*/
Route::get('products',[ProductController::class, 'index'])->name('products.index');
Route::get('products/create',[ProductController::class, 'create'])->name('products.create');
Route::get('products/{id}',[ProductController::class, 'show'])->name('products.show');
Route::post('products',[ProductController::class, 'store'])->name('products.store');
Route::delete('products/{id}',[ProductController::class, 'destroy'])->name('products.destroy');
Route::get('products/edit/{id}',[ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{id}',[ProductController::class, 'update'])->name('products.update');
