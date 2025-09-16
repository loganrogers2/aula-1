<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\testeController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\festaController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/novo',[ProdutoController::class,'criar'])->name('produtos.criar');
Route::post('/produtos/novo',[ProdutoController::class,'salvar'])->name('produtos.salvar');
Route::get('/teste/pais',[testeController::class,'pais'])->name('teste.pais');
Route::get('/musica',[CadastroController::class,'index'])->name('evento.musica');
Route::post('/musica',[CadastroController::class,'store']) ->name('evento.musica.store');


Route::get('/festa',[festaController::class,'index'])->name('evento.festa');