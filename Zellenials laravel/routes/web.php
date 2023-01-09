<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Storage;


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
Route::get('/about-us', [UserController::class, 'aboutUs'])->name('about');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/custom', [UserController::class, 'custom'])->name('custom');
Route::get('/profil', [UserController::class, 'profil'])->name('profil');
Route::get('/profil/edit', [UserController::class, 'profileEdit'])->name('editprofil');
Route::get('/cart', [UserController::class, 'cart'])->name('cart');
Route::get('/order', [UserController::class, 'order'])->name('order');
Route::get('/order/status', [UserController::class, 'orderStatus'])->name('orderStatus');
Route::get('/return', [UserController::class, 'return'])->name('return');
Route::get('/produk/{idProduk}/detail', [UserController::class, 'detailProduk'])->name('detailProduk');
Route::get('/checkout', [UserController::class, 'checkout'])->name('checkout');
Route::get('/checkout/confirm', [UserController::class, 'checkoutConfirm'])->name('checkoutConfirm');

Route::post('/cart/add/{idProduk}', [UserController::class, 'addCart'])->name('addCart');
Route::get('/cart/delete/{idProduk}/{size}', [UserController::class, 'deleteCart'])->name('deleteCart');
Route::get('/transaction', [UserController::class, 'newPesanan'])->name('newPesanan');

Route::post('/custom/order', [UserController::class, 'newCustom'])->name('newCustom');
Route::get('/custom/{idCustom}/delete', [AdminController::class, 'deleteOrder'])->name('deleteOrder');

Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');
Route::get('/admin/add', [AdminController::class, 'addItem'])->name('addItem');
Route::get('/admin/viewProduk', [AdminController::class, 'view'])->name('view');
Route::get('/admin/view/{idProduk}/edit', [AdminController::class, 'edit'])->name('editProduk');
Route::get('/admin/view/custom', [AdminController::class, 'viewCustom'])->name('viewCustom');

Route::post('/admin/add/new', [AdminController::class, 'add'])->name('addProduk');
Route::post('/admin/produk/{idProduk}/update', [AdminController::class, 'update'])->name('updateProduk');
Route::get('/admin/produk/{idProduk}/delete', [AdminController::class, 'delete'])->name('deleteProduk');

Route::post('/login/attempt', [UserController::class, 'loginScript'])->name('loginS');
Route::post('/register/attempt', [UserController::class, 'registerScript'])->name('registerS');
Route::post('/profil/update}', [UserController::class, 'updateProfile'])->name('updateProfile');

Route::get('/download/custom/{filename}', function ($filename)
{
    return Storage::download("public/uploaded/custom/".$filename);
});

Route::get('/download/produk/{filename}', function ($filename)
{
    return Storage::download("public/uploaded/produk/".$filename);
});

