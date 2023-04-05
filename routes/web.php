<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth:web');

Route::get('/product', [ProductController::class, 'index'])->middleware('auth:web');

Route::get('product.add', [ProductController::class, 'create']);

Route::get('/product/{id}/edit', [ProductController::class, 'edit']);

Route::get('/product/{id}/delete', [ProductController::class, 'destroy']);

Route::post('/product', [ProductController::class, 'store' ]);

Route::put('/product/{id}', [ProductController::class, 'update']);

Route::get('/category', [CategoryController::class, 'index'])->middleware('auth:web');

Route::get('category.add', [CategoryController::class, 'create']);

Route::get('/category/{id}/edit', [CategoryController::class, 'edit']);

Route::get('/category/{id}/delete', [CategoryController::class, 'destroy']);

Route::post('/category', [CategoryController::class, 'store' ]);

Route::put('/category/{id}', [CategoryController::class, 'update']);

Route::get('/register', [AuthController::class, "register"])->name('register');
Route::get('/login', [AuthController::class, "login"])->name('login');
Route::get('/logout', [AuthController::class, "logout"])->name('logout');

Route::post('/register', [AuthController::class, "doRegister"])->name('do.register');
Route::post('/login', [AuthController::class, "doLogin"])->name('do.login');
