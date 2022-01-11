<?php

use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ManagerItemController;
use App\Http\Controllers\ManagerReserveController;
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

#後台
Route::prefix('admin')->group(function () {
    #主控台
    Route::get('/', [ManagerController::class,'index'])->name( 'admin.dashboard.index');

    #餐點管理
    Route::get('items',[ManagerItemController::class,'index'])->name( 'admin.items.index');
    #新增餐點
    Route::get('items/create',[ManagerItemController::class,'create'])->name('admin.items.create');
    #編輯餐點
    Route::get('items/{id}/edit',[ManagerItemController::class,'edit'])->name('admin.items.edit');
    #儲存餐點
    Route::post('items/store', [ManagerItemController::class,'store'])->name('admin.items.store');
    #更新餐點
    Route::patch('items/{item}', [ManagerItemController::class, 'update'])->name('admin.items.update');
    #刪除餐點
    Route::delete('items/{item}', [ManagerItemController::class, 'destroy'])->name('admin.items.destroy');

    #預約管理
    Route::get('reserves',[ManagerReserveController::class,'index'])->name( 'admin.reserves.index');
    #新增預約
    Route::get('reserves/create',[ManagerReserveController::class,'create'])->name('admin.reserves.create');
    #編輯預約
    Route::get('reserves/{id}/edit',[ManagerReserveController::class,'edit'])->name('admin.reserves.edit');
    #儲存預約
    Route::post('reserves/store', [ManagerReserveController::class,'store'])->name('admin.reserves.store');
    #更新預約
    Route::patch('reserves/{item}', [ManagerReserveController::class, 'update'])->name('admin.reserves.update');
    #刪除預約
    Route::delete('reserves/{item}', [ManagerReserveController::class, 'destroy'])->name('admin.reserves.destroy');
});

