<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[MainController::class,'index'])->name('home');
//Route::get('/showcart',[MainController::class,'showCart'])->name('show.cart');
Route::get('showcart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart/', [CartController::class, 'addToCart'])->name('cart.store');
Route::get('remove/{id}', [CartController::class, 'removeCart'])->name('cart.remove');
Route::get('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');