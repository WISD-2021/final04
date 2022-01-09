<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemController;

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
Route::get('/reserve',[\App\Http\Controllers\ReserveController::class,'reserve'])->name('reserve');
Route::get('/order',[\App\Http\Controllers\OrderController::class,'order'])->name('order');
Route::get('/order/{id}', [\App\Http\Controllers\OrderController::class, 'add'])->name('order.add');
Route::get('/orderdelete/{id}', [\App\Http\Controllers\OderController::class, 'delete'])->name('order.delete');
