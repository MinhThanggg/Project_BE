<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/store', function () {
    return view('store');
});

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/admin_layout', function () {
    return view('admin_layout');
});

Route::get('/order', [AdminController::class, 'index']);
Route::get('/list_order', [AdminController::class, 'list']);
Route::get('/order', [AdminController::class, 'getAllOrder']);
Route::get('/list_order', [AdminController::class, 'getAllOrderList']);
Route::get('/', [AdminController::class, 'list']);

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
Route::post('/save-category-product', [CategoryController::class, 'save_category_product']);
