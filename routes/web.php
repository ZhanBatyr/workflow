<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\API\CartController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShopController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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

// Instashop вариант
Route::group(['middleware' => 'web', 'prefix' => 'instashop', 'as' => 'instashop.'], function () {
    Route::get('/', [ShopController::class, 'index'])->name('index');
    Route::get('/category/{category}', [ShopController::class, 'category'])->name('category');
    Route::get('/product/{product}', [ShopController::class, 'overview'])->name('overview');
    Route::get('/checkout', [ShopController::class, 'checkout'])->name('checkout');
    Route::post('/checkout/{cart}', [ShopController::class, 'buy'])->name('buy');
});

// Tailwind css вариант
Route::group(['middleware' => 'web'], function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/category/{category}', [IndexController::class, 'category'])->name('category');
    Route::get('/product/{product}', [IndexController::class, 'overview'])->name('overview');
    Route::get('/checkout', [IndexController::class, 'checkout'])->name('checkout');
    Route::post('/checkout/{cart}', [IndexController::class, 'buy'])->name('buy');

});

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class);
});

Route::group(['prefix' => 'cart', 'as' => 'cart.'], function () {
    Route::post('/add', [CartController::class, 'add'])->name('add');
    Route::post('/remove', [CartController::class, 'remove'])->name('remove');
});

require __DIR__.'/auth.php';
