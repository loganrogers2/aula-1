<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('index', [SiteController::class, 'index']);
Route::get('shop', [SiteController::class, 'shop']);
Route::get('services', [SiteController::class, 'services']);

// Rotas para o carrinho
Route::get('cart', [SiteController::class, 'cart'])->name('cart.index');
Route::post('cart/add/{id}', [SiteController::class, 'addToCart'])->name('cart.add');
Route::delete('cart/remove/{id}', [SiteController::class, 'removeFromCart'])->name('cart.remove');
Route::post('cart/update/{id}', [SiteController::class, 'updateCart'])->name('cart.update');
Route::post('cart/clear', [SiteController::class, 'clearCart'])->name('cart.clear');

// Rotas para agendamentos
Route::get('appointments/create', [SiteController::class, 'createAppointment'])->name('appointments.create');
Route::post('appointments', [SiteController::class, 'storeAppointment'])->name('appointments.store');


