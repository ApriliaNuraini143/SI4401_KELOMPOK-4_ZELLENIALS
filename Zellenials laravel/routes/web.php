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


Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login/logins', [UserController::class, 'loginget'])->name('logins');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register/create', [UserController::class, 'create'])->name('create');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/custom', [UserController::class, 'custom'])->name('custom');
Route::get('/profil', [UserController::class, 'profil'])->name('profil');
Route::get('/profil/edit}', [UserController::class, 'profileEdit'])->name('editprofil');
Route::post('/profil/update}', [UserController::class, 'updateProfile'])->name('updateProfile');
Route::get('/keranjang', [UserController::class, 'keranjang'])->name('keranjang');
Route::get('/about-us', [UserController::class, 'aboutUs'])->name('aboutUs');
Route::get('/order/status', [UserController::class, 'orderStatus'])->name('orderStatus');
Route::get('/order', [UserController::class, 'order'])->name('order');
Route::get('/retur1', [UserController::class, 'retur1'])->name('retur1');

Route::get('/admin/add', [AdminController::class, 'addItem'])->name('addItem');
Route::get('/admin/viewProduk', [AdminController::class, 'view'])->name('view');
Route::get('/admin/view/{idProduk}/edit', [AdminController::class, 'edit'])->name('editProduk');

Route::post('/admin/add/new', [AdminController::class, 'add'])->name('addProduk');
Route::post('/admin/produk/{idProduk}/update', [AdminController::class, 'update'])->name('updateProduk');
Route::get('/admin/produk/{idProduk}/delete', [AdminController::class, 'delete'])->name('deleteProduk');