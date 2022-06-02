<?php

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
use App\Http\Controllers\ProductController;

Route::get('add-product', [ProductController::class, 'create']);
Route::post('add-product', [ProductController::class, 'store']);
Route::get('products', [ProductController::class, 'index']);
Route::get('edit-product/{id}', [ProductController::class, 'edit']);
Route::put('update-product/{id}', [ProductController::class, 'update']);
Route::post('/delete-product/{id}', [ProductController::class, 'destroy']);

// Route::get('/', function () {
//     return view('welcome');
// });
