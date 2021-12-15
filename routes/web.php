<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\order\OrderController;
use App\Http\Controllers\user\UserOrderController;
use App\Http\Controllers\product\ProductController;
use App\Http\Controllers\category\CategoryController;
use App\Http\Controllers\customer\CustomerController;

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
    return view('auth.register');
});

Route::get('/admin/logout',[AdminController::class,'Logout'])->name('Logout');
Route::get('/admin',[AdminController::class,'index'])->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/makeorder', function () {
    return view('user.index');
})->name('makeorder');

Route::resource('orders',OrderController::class);
Route::resource('customers',CustomerController::class);
Route::resource('category',CategoryController::class);
Route::resource('products',ProductController::class);
Route::resource('placeorder',UserOrderController::class);



