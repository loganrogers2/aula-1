<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testeController extends Controller
{
   public function pais(){
    $linhas = DB::select("SELECT Code, Name FROM country ORDER BY Name ASC");
    $paises = [];
    foreach($linhas as $linha){
        $paises[$linha ->Code] = $linha -> Name;
    }
    return view('treinamento.teste', compact('paises'));
   }
 
}
