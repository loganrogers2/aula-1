<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class festaController extends Controller
{
    public function index(){
        return view('treinamento.layout');
    }
}
