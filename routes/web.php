<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteReportController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'login'])->name('auth.login');
Route::get('/reset-password', [HomeController::class, 'resetPassword'])->name('auth.reset_password');

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

//
Route::group(['prefix' => 'product'], function () {

    // GETS
    Route::get('/', [ProductController::class, 'index'])->name('products');
    Route::get('/add', [ProductController::class, 'create'])->name('product.add');
    Route::get('/edit', [ProductController::class, 'edit'])->name('product.edit');
});

Route::group(['prefix' => 'category'], function () {

    // GETS
    Route::get('/lists', [CategoriesController::class, 'index'])->name('categories');
    Route::get('/add', [CategoriesController::class, 'create'])->name('category.add');
    Route::get('/edit/{slug}', [CategoriesController::class, 'edit'])->name('category.edit')->where(['slug' => '[a-z]+']);

    // POST
    Route::post('/create', [CategoriesController::class, 'store'])->name('create_category');
    Route::put('/update', [CategoriesController::class, 'update'])->name('update_category');
    Route::delete('/delete', [CategoriesController::class, 'destroy'])->name('delete_category');
});


Route::group(['prefix' => 'customer'], function () {
    // GETS
    Route::get('/', [CustomerController::class, 'index'])->name('customers');
    Route::get('/add', [CustomerControllerr::class, 'create'])->name('customer.add');
    Route::get('/edit', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::get('/view/{id}', [CustomerController::class, 'show'])->name('customer.view');
});

Route::group(['prefix' => 'order'], function () {
    // GETS
    Route::get('/', [OrderController::class, 'index'])->name('orders');
    Route::get('/add', [OrderController::class, 'create'])->name('order.add');
    Route::get('/edit/{id}', [OrderController::class, 'edit'])->name('order.edit');
    Route::get('/view/{id}', [OrderController::class, 'show'])->name('order.view');
});

Route::group(['prefix' => 'report'], function () {
    // GETS
    Route::get('/customer_order', [SiteReportController::class, 'customerOrder'])->name('report.customer');
    Route::get('/sales', [SiteReportController::class, 'sales'])->name('report.sales');
    Route::get('/returns', [SiteReportController::class, 'customerReturn'])->name('report.return');
    Route::get('/shipping', [SiteReportController::class, 'shipping'])->name('report.shipping');
    Route::get('/product', [SiteReportController::class, 'product'])->name('report.product');
});



Route::get('/settings', [HomeController::class, 'settings'])->name('setings');