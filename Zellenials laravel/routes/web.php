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

Route::get('login', function () {
    return view('user.login');
});

Route::get('register', function () {
    return view('user.registrasi');
});

Route::get('keranjang', function () {
    return view('user.shopping-cart');
});

#Route::get('keranjang', [UserController::class, 'keranjang'])->name('shopping-cart');