<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteReportController;
use Illuminate\Support\Facades\Artisan;
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
    Route::get('/edit/{slug}/{id}', [ProductController::class, 'edit'])->name('product.edit')->where(['slug' => '^([0-9A-Za-z\-]+)', 'id' => '[0-9]+']);

    Route::post('/add', [ProductController::class, 'store'])->name('product.store');
    Route::put('/update', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/delete', [ProductController::class, 'destroy'])->name('product.delete');

    // media upload
    Route::post('/media/upload', [ProductController::class, 'uploadMedia'])->name('product-media.post');
    // Route::put('/media/upload', [ProductController::class, 'uploadMedia'])->name('product-media.put');
});

Route::group(['prefix' => 'category'], function () {

    // GETS
    Route::get('/lists', [CategoriesController::class, 'index'])->name('categories');
    Route::get('/add', [CategoriesController::class, 'create'])->name('category.add');
    Route::get('/edit/{slug}/{id}', [CategoriesController::class, 'edit'])->name('category.edit')->where(['slug' => '^([0-9A-Za-z\-]+)', 'id' => '[0-9]+']);

    // POST
    Route::post('/create', [CategoriesController::class, 'store'])->name('create_category');
    Route::put('/update', [CategoriesController::class, 'update'])->name('category.update');
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
    Route::get('/edit/{order_code}/{id}', [OrderController::class, 'edit'])->name('order.edit');
    Route::get('/view/{order_code}/{id}', [OrderController::class, 'show'])->name('order.view');
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


// clear routes
Route::get('/clear-config', function () {

    Artisan::call('config:clear');
    return 'Browser config optimised';
});

Route::get('/clear-cache', function () {

    Artisan::call('config:cache');
    return 'Browser config optimised';
});

Route::get('/clear-optimize', function () {

    Artisan::call('optimize:clear');
    return 'Browser config optimised';
});