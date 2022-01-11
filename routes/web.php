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
#商品加入購物車資料表
Route::post('/cart/store',[\App\Http\Controllers\CartController::class,'store'])->name('cart.store');
#購物車頁面
Route::get('/cart/index',[\App\Http\Controllers\CartController::class,'index'])->name('cart.index');
#從購物車刪除商品
Route::delete('/cart/destroy/{id}',[\App\Http\Controllers\CartController::class,'destroy'])->name('cart.destroy');
#結帳頁面
Route::get('/cart/checkout',[\App\Http\Controllers\CartController::class,'checkout'])->name('cart.checkout');
#送出訂單
Route::get('/cart/end',[\App\Http\Controllers\CartController::class,'end'])->name('cart.end');
#訂單頁面
Route::get('/order',[\App\Http\Controllers\OrderController::class,'index'])->name('order');

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
});

