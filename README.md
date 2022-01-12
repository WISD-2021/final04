# 首頁
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/home.png)
# 菜單
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/menu.png)
# 線上預約
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/reserve.png)
# 查看歷史訂單紀錄
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/order.png)
# 管理者頁面
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/adminmain.png)
# 餐點管理
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/item.png)
# 新增餐點
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/itemadd.png)
# 修改餐點
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/itemedit.png)
# 預約管理
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/mreserve.png)
# 修改預約
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/mreserveedit.png)
# 座位管理
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/table.png)
# 新增座位
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/tableadd.png)
# 修改座位
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/tableedit.png)
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# ERD
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/erd.png)
# 資料庫綱要圖
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/database.png)
# 資料表欄位設計
## 使用者資料表
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/usertable.png)
## 會員資料表
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/membertable.png)
## 管理者資料表
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/admintable.png)
## 訂單資料表
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/ordertable.png)
## 預約資料表
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/reservetable.png)
## 座位資料表
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/tabletable.png)
## 餐點資料表
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/itemtable.png)
## 餐點類別資料表
![image](https://raw.githubusercontent.com/WISD-2021/final04/master/public/readme/typetable.png)
# 系統主要功能
* 會員:
  * 會員能查看菜單
  * 會員可以查看訂單紀錄
  * 會員可以線上預約
* 管理者:
  * 管理者可以查看餐點管理、預約管理、座位管理、訂單管理以及會員管理
  * 管理者可以新增餐點，或對其刪除、修改
# 網站安裝(系統復原步驟)
1. 複製 https://github.com/WISD-2021/final04.git本系統在GitHub的專案
- **打開 Source tree，點選 Clone 後，輸入以下資料Source Path:https://github.com/WISD-2021/final04.git Destination Path:C:\wagon\uwamp\www\final04 打開cmder，切換至專案所在資料夾，cd final04**
@@ -73,27 +73,27 @@
3. 將專案打開 在.env檔案內輸入資料庫主機IP、Port、名稱、與帳密如下：：
- **DB_HOST=127.0.0.1**
- **DB_PORT=33060**
- **DB_DATABASE=final04**
- **DB_USERNAME=root**
- **DB_PASSWORD=root**
4. 復原完，建立資料庫
- **先進Adminer建立final04的資料庫**
- **建立好之後開啟cmder輸入以下指令： artisan migrate(成功執行後會復原所有資料表)**
- **artisan db:seed(建立假資料)**
5. 進入adminer
- **資料庫系統:MYSQL**
- **伺服器:localhost:33060**
- **帳號:root**
- **密碼:root**
6. 在UwAmp下，點選Apache config，選擇port 8000 ，並在Document Root 輸入{DOCUMENTPATH}/final04/public
# 初始專案與DB負責的同學
* 初級專案建置：[3A832058 柯昕廷](http://github.com/3A832058)
* 資料庫關聯：[3A832058 柯昕廷](http://github.com/3A832058)
* 資料建置：[3A832058 柯昕廷](http://github.com/3A832058)
* 資料庫資料建置：[3A832058 柯昕廷](http://github.com/3A832058)

# 系統使用帳號(使用者資料)
* 前台-會員 帳號：bbb@gmail.com  密碼：12345678
* 後台-管理者 帳號：admin@gmail.com 密碼：123456789
# 系統開發人員
* [3A832055 蔡羽宣](http://github.com/3A832055)
* [3A832058 柯昕廷](http://github.com/3A832058)
# 工作分配
# 前台：[3A832055 蔡羽宣](http://github.com/3A832055)
* // 首頁
  * Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {return view('dashboard');})->name('dashboard');
* // 菜單頁面
  * Route::get('/item',[\App\Http\Controllers\ItemController::class,'item'])->name('item');
* // 購物車頁面
    * Route::get('/cart/index',[\App\Http\Controllers\CartController::class,'index'])->name('cart.index');
* // 新增購物車
    *Route::post('/cart/store',[\App\Http\Controllers\CartController::class,'store'])->name('cart.store');
* // 刪除購物車
    * Route::delete('/cart/destroy/{id}',[\App\Http\Controllers\CartController::class,'destroy'])->name('cart.destroy');
* //結帳頁面
   * Route::get('/cart/checkout',[\App\Http\Controllers\CartController::class,'checkout'])->name('cart.checkout');
* //送出訂單
   *Route::get('/cart/end',[\App\Http\Controllers\CartController::class,'end'])->name('cart.end');
* //訂單頁面
   *Route::get('/order',[\App\Http\Controllers\OrderController::class,'index'])->name('order');
* //登出
   * Route::get('/logout',[\App\Http\Controllers\UserController::class,'logout'])->name('user.logout');

# 後台：[3A832058 柯昕廷](http://github.com/3A832058)
* //後台
  *Route::prefix('admin')->group(function () {
* //主控台
  * Route::get('/', [ManagerController::class,'index'])->name( 'admin.dashboard.index');
* //餐點管理
  * Route::get('items',[ManagerItemController::class,'index'])->name( 'admin.items.index');
* //新增餐點
  * Route::get('items/create',[ManagerItemController::class,'create'])->name('admin.items.create');
* //編輯餐點
  * Route::get('items/{id}/edit',[ManagerItemController::class,'edit'])->name('admin.items.edit');
* //儲存餐點
  * Route::post('items/store', [ManagerItemController::class,'store'])->name('admin.items.store');
* //更新餐點
  * Route::patch('items/{item}', [ManagerItemController::class, 'update'])->name('admin.items.update');
* //刪除餐點
  * Route::delete('items/{item}', [ManagerItemController::class, 'destroy'])->name('admin.items.destroy');
* //預約管理
  * Route::get('reserves',[ManagerReserveController::class,'index'])->name( 'admin.reserves.index');
* //編輯預約
  * Route::get('reserves/{id}/edit',[ManagerReserveController::class,'edit'])->name('admin.reserves.edit');
* //儲存預約
  * Route::post('reserves/store', [ManagerReserveController::class,'store'])->name('admin.reserves.store');
* //更新預約
  * Route::patch('reserves/{reserve}', [ManagerReserveController::class, 'update'])->name('admin.reserves.update');
* //刪除預約
  * Route::delete('reserves/{reserve}', [ManagerReserveController::class, 'destroy'])->name('admin.reserves.destroy');
* //餐桌管理
  * Route::get('tables',[ManagerTableController::class,'index'])->name( 'admin.tables.index');
* //新增餐桌
  * Route::get('tables/create',[ManagerTableController::class,'create'])->name('admin.tables.create');
* //編輯餐桌
  * Route::get('tables/{id}/edit',[ManagerTableController::class,'edit'])->name('admin.tables.edit');
* //儲存餐桌
  * Route::post('tables/store', [ManagerTableController::class,'store'])->name('admin.tables.store');
* //更新餐桌
  * Route::patch('tables/{table}', [ManagerTableController::class, 'update'])->name('admin.tables.update');
* //刪除餐桌
  * Route::delete('tables/{table}', [ManagerTableController::class, 'destroy'])->name('admin.tables.destroy');
});
