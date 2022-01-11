<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReserveController;


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
    return view('dashboard');
})->name('dashboard');

Route::get('/logout',[\App\Http\Controllers\UserController::class,'logout'])->name('user.logout');
Route::get('/item',[\App\Http\Controllers\ItemController::class,'item'])->name('item');
Route::get('/reserve/create',[\App\Http\Controllers\ReserveController::class,'create'])->name('reserve');
Route::post('/reserve', [\App\Http\Controllers\ReserveController::class,'store'])->name('reserve.store');
Route::get('/order/create',[\App\Http\Controllers\OrderController::class,'create'])->name('order.create');
Route::get('/order',[\App\Http\Controllers\OrderController::class,'index'])->name('order.index');
Route::post('order/store',[\App\Http\Controllers\OrderController::class,'store'])->name('order.store');
//Route::get('/removeorder/{id}', 'OrderController@removeorder');
//Route::get('/orders','OrderController@showorder');
