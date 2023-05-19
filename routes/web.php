<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyShopController;

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SslCommerzPaymentController;


//WEBSITES ROUTES START FROM HERE...

//all frontend routes...
Route::get('/', [MyShopController::class, 'index'])->name('home');
Route::get('/product/category{id}', [MyShopController::class, 'productByCategory'])->name('product.category');
Route::get('/product/brand{id}', [MyShopController::class, 'productByBrand'])->name('product.brand');
Route::get('/product/subcategory{id}', [MyShopController::class, 'productBySubCategory'])->name('product.subcategory');
Route::get('/product/details{id}', [MyShopController::class, 'singleProduct'])->name('product.single');
Route::get('/product/search', [MyShopController::class, 'search'])->name('product.search');


//all cart routes...
Route::post('/product/cart{id}', [CartController::class, 'addToCart'])->name('product.addtocart');
Route::get('/product/cart/delete{id}', [CartController::class, 'deleteFromCart'])->name('product.deletefromcart');
Route::get('/product/cart/edit', [CartController::class, 'editCart'])->name('product.cart.edit');
Route::post('/product/cart/update{id}', [CartController::class, 'updateCart'])->name('product.cart.update');


//all customer routes...
Route::get('/customer/login', [CustomerController::class, 'login'])->name('customer.login');
Route::post('/customer/check', [CustomerController::class, 'check'])->name('customer.check');
Route::get('/customer/logout', [CustomerController::class, 'logout'])->name('customer.logout');
Route::get('/customer/register', [CustomerController::class, 'register'])->name('customer.register');
Route::post('/customer/store', [CustomerController::class, 'store'])->name('customer.store');



// SSLCOMMERZ Start...

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);
Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);
Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);

//SSLCOMMERZ END...



Route::middleware(['customer_check'])->group(function () {

    Route::get('/product/checkout/index', [CheckoutController::class, 'index'])->name('checkout.index');

});


