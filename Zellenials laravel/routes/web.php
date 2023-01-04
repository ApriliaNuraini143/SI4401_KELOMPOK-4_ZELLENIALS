<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'index'])->name('home');

Route::get('view-product', function () {
    return view('admin.view-product');
});

Route::get('add-product', function () {
    return view('admin.add-product');
});

Route::get('edit-product', function () {
    return view('admin.edit-product');
});

Route::get('custom-product', function () {
    return view('admin.custom-product');
});

Route::get('register', function () {
    return view('user.registrasi');
});

Route::get('keranjang', function () {
    return view('user.shopping-cart');
});

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/login/logins', [UserController::class, 'get'])->name('logins');

Route::get('/register', [UserController::class, 'register'])->name('register');

Route::post('/register/create', [UserController::class, 'create'])->name('create');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

#Route::get('keranjang', [UserController::class, 'keranjang'])->name('shopping-cart');