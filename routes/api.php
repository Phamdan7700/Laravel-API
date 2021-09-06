<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Categories
Route::get('/categories', [CategoryController::class, 'index'])->name('category.list');
// Featured products
Route::get('/featured-products', [ProductController::class, 'featuredProducts'])->name('product.featured');
//  Products
Route::get('/products', [ProductController::class, 'index'])->name('product.list');
// Product by category
Route::get('/category/{category}/products', [ProductController::class, 'productByCategory'])->name('category.product.list');
// Detail of product
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.detail');