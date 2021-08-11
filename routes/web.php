<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function() {
  return view('welcome');
});
// tất cả danh mục sản phẩm 
Route::get('/categories', [CategoryController::class, 'index'])->name('category.list');
// sản phẩm nổi bật
Route::get('/featured-products', [ProductController::class, 'featuredProducts'])->name('product.featured');
//  tất cả sản phẩm
Route::get('/products', [ProductController::class, 'index'])->name('product.list');
// sản phẩm theo danh mục
Route::get('/category/{category}/products', [ProductController::class, 'productByCategory'])->name('category.product.list');
// Chi tiết 1 sản phẩm
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.detail');
