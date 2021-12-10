<?php

use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('order/orders',[CustomerController::class,'orders'])->name('orders');
Route::get('/customers',[CustomerController::class,'index'])->name('customerIndex');
Route::get('/category',[CategoryController::class,'index'])->name('cat');
Route::get('/products',[ProductController::class,'index'])->name('prod');



