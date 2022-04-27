<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\ProductsController;
use App\Http\Controllers\Dashboard\DashboardController;

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

// Operations Routes
Route::prefix('dashboard')->name('dashboard')->middleware('verified')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);

    Route::prefix('products')->controller(ProductsController::class)->name('.products.')->group(function () {
        Route::get('/', [ProductsController::class, 'index'])->name('index');
        Route::get('/create', [ProductsController::class, 'create'])->name('createProduct');
        Route::post('/store', [ProductsController::class, 'store'])->name('storeProduct');
        Route::get('/{id}/edit', [ProductsController::class, 'edit'])->name('editProduct');
        Route::put('/{id}/update', [ProductsController::class, 'update'])->name('updateProduct');
        Route::delete('/{id}/delete', [ProductsController::class, 'delete'])->name('deleteProduct');
    });
});



// Auth Routes
Route::prefix('dashboard')->group(function () {
    Auth::routes(['verify' => true]);
});
