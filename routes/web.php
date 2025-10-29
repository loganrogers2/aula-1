<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

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

// Rota para a página da equipe
Route::get('equipe', [SiteController::class, 'equipe'])->name('equipe');

// Rotas do Admin
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('appointments', [AdminController::class, 'appointments'])->name('appointments');
    Route::get('appointments/{id}', [AdminController::class, 'appointmentShow'])->name('appointments.show');
    Route::patch('appointments/{id}/status', [AdminController::class, 'appointmentUpdateStatus'])->name('appointments.update-status');
    Route::get('clients', [AdminController::class, 'clients'])->name('clients');
    Route::get('clients/{email}', [AdminController::class, 'clientDetails'])->name('clients.show');
});

// Rotas de Autenticação
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
