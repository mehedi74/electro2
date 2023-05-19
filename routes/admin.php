<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProductController;

//ADMIN ROUTES START FROM HERE...

//all authentication routes...
Route::get('/admin-login', [AdminController::class, 'admin'])->name('admin-login');
Route::post('/show-dashboard', [AdminController::class, 'showDashboard'])->name('show-dashboard');


Route::middleware(['check'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

    //all category routes here...
    Route::resource('/categories', CategoryController::class);
    Route::get('/categories/update/status{id}', [CategoryController::class, 'updateStatus'])->name('category.updatae.status');


    //all sub-category routes here...
    Route::resource('/subcategories', SubCategoryController::class);
    Route::get('/subcategories/updte/status{id}', [SubCategoryController::class, 'updateStatus'])->name('subcategory.update.status');


    //all Brands routes here...
    Route::resource('/brands', BrandController::class);
    Route::get('/brands/update/status{id}', [BrandController::class, 'updateStatus'])->name('brands.update.status');


    //all unit routes here...
    Route::resource('/units', UnitController::class);
    Route::get('/units/update/status{id}', [UnitController::class, 'updateStatus'])->name('units.update.status');


    //all sizes routes here...
    Route::resource('/sizes', SizeController::class);
    Route::get('/sizes/update/status{id}', [SizeController::class, 'updateStatus'])->name('sizes.update.status');


    //all colors routes here...
    Route::resource('/colors', ColorController::class);
    Route::get('/colors/update/status{id}', [ColorController::class, 'updateStatus'])->name('colors.update.status');


    //all product routes here...
    Route::resource('/products', ProductController::class);
    Route::get('/products/update/status{id}', [ProductController::class, 'updateStatus'])->name('products.update.status');


//    //all order routes...
//    Route::get('/order/manage', [OrderController::class, 'manageOrder'])->name('order.manage');
//    Route::get('/order/details{id}', [OrderController::class, 'viewOrderDetails'])->name('order.details');
//    Route::get('order/invoice{id}', [OrderController::class, 'invoice'])->name('order.invoice');
//    Route::get('order/invoice/download{id}', [OrderController::class, 'invoiceDownload'])->name('invoice.download');

});
