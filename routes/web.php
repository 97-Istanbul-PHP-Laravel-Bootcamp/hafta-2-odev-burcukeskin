<?php
use App\Http\Controllers\MainController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/category', [CategoryController::class, 'index'])->name('Category');
Route::get('/product', [ProductController::class, 'index'])->name('Product');
Route::get('/basket', [BasketController::class, 'index'])->name('Basket');
Route::get('/payment', [PaymentController::class, 'index'])->name('Payment');
Route::get('/orders', [OrderController::class, 'index'])->name('Orders');
Route::get('/orders/{id}', [OrderController::class, 'detail'])->name('Order');

Route::get('/user/login', [UserController::class, 'login_form'])->name('user.login');
Route::get('/user/register', [UserController::class, 'register_form'])->name('user.register ');
