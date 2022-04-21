<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts',[PostController::class,'index'])->name('posts.index');
Route::post('/posts/store',[PostController::class,'store']);
Route::get('/posts/edit/{id}',[PostController::class,'edit'])->name('posts.edit');
Route::put('/posts/update',[PostController::class,'update']);
Route::delete('/posts/delete/{id}',[PostController::class,'delete'])->name('posts.delete');


Route::get('/customer',[CustomerController::class,'index'])->name('customer.index');
