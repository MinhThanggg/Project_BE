<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\HomeController;
use Psy\Command\ShowCommand;

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

Route::get('', [HomeController::class, 'index']);



Route::get('/store', function () {
    return view('store');
});

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/admin_layout', function () {
    return view('admin_layout');
});

Route::get('/danh-muc-san-pham/{category_id}', [CategoryController::class, 'show_category_home']);
Route::get('/chi-tiet-san-pham/{product_id}', [ProductController::class, 'detail_product']);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/order', [AdminController::class, 'index']);
Route::get('/list_order', [AdminController::class, 'list']);
Route::get('/order', [AdminController::class, 'getAllOrder']);
Route::get('/list_order', [AdminController::class, 'getAllOrderList']);


Route::get('/add_order', [OrderController::class, 'index']);
Route::get('/add_order', [OrderController::class, 'getProductOnInsert']);

Route::get('/add', [OrderController::class, 'insert']);

//Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::get('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
// Route::get('/add_order', ;
// });

//Category
Route::get('/add_category_product', [CategoryController::class, 'add_category_product']);
Route::get('/all_category_product', [CategoryController::class, 'all_category_product']);
Route::get('/edit-category-product/{category_product_id}', [CategoryController::class, 'edit_category_product']);
Route::get('/delete-category-product/{category_product_id}', [CategoryController::class, 'delete_category_product']);

Route::post('/save-category-product', [CategoryController::class, 'save_category_product']);
Route::post('/update-category-product/{category_product_id}', [CategoryController::class, 'update_category_product']);

//Product
Route::get('/add_product', [ProductController::class, 'add_product']);
Route::get('/all_product', [ProductController::class, 'all_product']);
Route::get('/edit-product/{product_id}', [ProductController::class, 'edit_product']);
Route::get('/delete-product/{product_id}', [ProductController::class, 'delete_product']);

Route::post('/save-product', [ProductController::class, 'save_product']);
Route::post('/update-product/{product_id}', [ProductController::class, 'update_product']);

