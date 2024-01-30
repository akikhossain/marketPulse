<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\WebController;
use Illuminate\Support\Facades\Route;

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

//Website route part

Route::get('/',[WebController::class,'Website'])->name('website.home');


//Backend route part
  Route::get('/dashboard',[DashboardController::class,'Dashboard'])->name('dashboard.home');
