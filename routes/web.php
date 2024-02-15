<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\WebController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Models\Product;

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
//Route for Website

Route::get('/', [FrontendHomeController::class, 'home'])->name('home');


//Route for Admin

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard.home');

// Category Routes
Route::get('/category/list', [CategoryController::class, 'viewList'])->name('category.list');
Route::get('/category/form', [CategoryController::class, 'createForm'])->name('category.form');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');


// Product Routes
Route::get('/product/form', [ProductController::class, 'createForm'])->name('product.form');
Route::get('/product/list', [ProductController::class, 'viewList'])->name('product.list');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/Employee/delete/{id}', [ProductController::class, 'productDelete'])->name('product.delete');



// Brand Routes
Route::get('/brand/form', [BrandController::class, 'createForm'])->name('brand.form');
Route::get('/brand/list', [BrandController::class, 'viewList'])->name('brand.list');
Route::post('/brand/store', [BrandController::class, 'store'])->name('brand.store');



//User Routes
Route::get('/user/form',[UserController::class,'createForm'])->name('user.form');
Route::get('/user/list',[UserController::class,'viewList'])->name('user.list');
Route::post('/user/store',[UserController::class,'store'])->name('user.store');


