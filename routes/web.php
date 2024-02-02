<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Frontend\WebController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;

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
Route::get('/category/list',[CategoryController::class,'viewList'])->name('category.list');
Route::get('/category/form',[CategoryController::class,'createForm'])->name('category.form');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
