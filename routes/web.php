<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\EmployeesController;



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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('/')->middleware('auth')->group(function () {


    Route::resource('category', CategoryController::class);
    Route::resource('sub-category', SubCategoryController::class);
    Route::resource('item', ItemController::class);
    Route::get('/orders_list', [App\Http\Controllers\ItemController::class, 'list'])->name('orders.list');
    Route::resource('orders', OrdersController::class);
    Route::get('/store', [App\Http\Controllers\ItemController::class, 'store'])->name('employee.store');

    Route::resource('employee', EmployeesController::class);



});