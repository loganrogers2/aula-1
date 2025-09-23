<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\testeController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\festaController;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\AuthController;


Route::get('/produtos/novo',[ProdutoController::class,'criar'])->name('produtos.criar');
Route::post('/produtos/novo',[ProdutoController::class,'salvar'])->name('produtos.salvar');
Route::get('/teste/pais',[testeController::class,'pais'])->name('teste.pais');
Route::get('/musica',[CadastroController::class,'index'])->name('evento.musica');
Route::post('/musica',[CadastroController::class,'store']) ->name('evento.musica.store');


Route::get('/festa',[festaController::class,'index'])->name('evento.festa');

Route::get('/admin/login',[logincontroller::class,'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login',[logincontroller::class,'login'])->name('admin.login');
Route::post('/admin/logout',[logincontroller::class,'logout'])->name('admin.logout');
Route::post('/admin/register',[logincontroller::class,'Register'])->name('admin.register');
Route::get('/admin/register',[logincontroller::class,'showRegisterForm'])->name('admin.register.form');

Route::middleware(['web'])->group(function () {
Route::get('/admin/clientes',[cadastroController::class,'listarClientes'])->name('admin.clientes');
Route::get('/admin/users/create',[logincontroller::class,'showCreateUserForm'])->name('admin.users.create');
Route::post('/admin/users',[logancontroller::class,'createUser'])->name('admin.users.store');

});
