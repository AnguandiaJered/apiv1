<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::get('/customer',[CustomerController::class,'index'])->name('index');
Route::post('/customer/store',[CustomerController::class,'store'])->name('customer.store');
Route::get('/edit_customer/{id}',[CustomerController::class,'edit'])->name('edit_customer.edit');
Route::post('/customer/update',[CustomerController::class,'update'])->name('customer.update');
Route::get('/customer/delete/{id}',[CustomerController::class,'destroy'])->name('customer.delete');

