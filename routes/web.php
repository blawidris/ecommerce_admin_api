<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SiteReportController;
use App\Models\Posts;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;

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

// Auth::routes();


Route::group(['prefix' => 'admin'], function () {


    Route::get('/', [LoginController::class, 'login'])->name('login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');
    Route::get('/reset-password', [HomeController::class, 'resetPassword'])->name('auth.reset_password');

    // login post
    Route::post('/login', [LoginController::class, 'adminLogin']);

    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

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
        //GETS
        Route::get('/', [CustomerController::class, 'index'])->name('customers');
        Route::get('/add', [CustomerController::class, 'create'])->name('customer.add');
        Route::get('/edit/{$id}', [CustomerController::class, 'edit'])->name('customer.edit');
        Route::get('/view/{id}', [CustomerController::class, 'show'])->name('customer.view');

        Route::post('/store', [CustomerController::class, 'store'])->name('customer.store');
        Route::put('/update-profile', [CustomerController::class, 'update'])->name('customer.update-profile');
        Route::put('/update-address', [CustomerController::class, 'changeAddress'])->name('customer.update-address');
        Route::put('/update-phone', [CustomerController::class, 'changePhone'])->name('customer.update-phone');
        Route::delete('delete', [CustomerController::class, 'destroy'])->name('customer.delete');

        Route::get('/address/{id}', [CustomerController::class, 'getAddress'])->name('customer.address');
    });

    Route::group(['prefix' => 'order'], function () {
        // GETS
        Route::get('/', [OrderController::class, 'index'])->name('orders');
        Route::get('/add', [OrderController::class, 'create'])->name('order.add');
        Route::get('/edit/{id}/{order_code}', [OrderController::class, 'edit'])->where(['order_code' => '([A-Za-z0-9\-]+)', 'id' => '[0-9]+'])->name('order.edit');
        Route::get('/view/{id}/{order_code}', [OrderController::class, 'show'])->where(['order_code' => '([A-Za-z0-9\-]+)', 'id' => '[0-9]+'])->name('order.view');


        // POSTS
        Route::post('store', [OrderController::class, 'store'])->name('order.store');
        Route::put('/update', [OrderController::class, 'update'])->name('order.update');

        // DELETE
        Route::delete('/delete', [OrderController::class, 'destroy']);
    });

    Route::group(['prefix' => 'report'], function () {
        // GETS
        Route::get('/customer_order', [SiteReportController::class, 'customerOrder'])->name('report.customer');
        Route::get('/sales', [SiteReportController::class, 'sales'])->name('report.sales');
        Route::get('/returns', [SiteReportController::class, 'customerReturn'])->name('report.return');
        Route::get('/shipping', [SiteReportController::class, 'shipping'])->name('report.shipping');
        Route::get('/product', [SiteReportController::class, 'product'])->name('report.product');
    });


    Route::resource('post', PostsController::class);
    Route::put('/post/update', [PostsController::class, 'update'])->name('post.updates');



    Route::group(['prefix' => 'setting'], function () {

        Route::get('/', [SettingController::class, 'index'])->name('setting.index');

        Route::post('/store', [SettingController::class, 'store'])->name('setting.store');
        Route::post('/localization', [SettingController::class, 'storeLocalization'])->name('setting.localize');


        Route::put('/store', [SettingController::class, 'storeLocalization'])->name('setting.store-update');
        Route::put('/localization', [SettingController::class, 'storeLocalization'])->name('setting.store-localize');
    });
});

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
