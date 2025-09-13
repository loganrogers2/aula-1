<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CadastroController extends Controller
{
    public function index()
    {
     return view('treinamento.eventoMusic');
     
    }

    // Lógica para armazenar os dados do formulário

    public function store(Request $request) {
        $estilos = $request -> input('estilos') ?implode(',', $request -> input('estilos')) : null ;
        DB::insert("INSERT INTO cadastro (nome, email, telefone, idade, estilos, novidades, created_at)
        VALUES (?, ?, ?, ?, ?, ?, NOW()) ",
        [
        $request -> input ('nome'),
        $request -> input ('email'),
        $request -> input ('telefone'),
        $request -> input ('idade'),
        $estilos,
        $request -> input ('novidades') ? 1 : 0,
        ]   
    );
    return redirect() -> back() ->with('success', 'Cadastro realizado com sucesso!');
}
}
