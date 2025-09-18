<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class festaController extends Controller
{
    public function index(){
        return view('festa'); 
    }

    public function login(){
        return view('login');
    }
}
