<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class logincontroller extends Controller
{
    public function loginForm(){
        return view('admin.login');
    }
    public function login(Request $request){
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $rows = DB::SELECT("SELECT id,name,email,password,is_superadmin FROM users WHERE email = ? limit 1",[$data['email']]);

        if(count($rows) === 0 ){
            return back() ->withErrors(['email' => 'Credenciais inválidas'])->withInput();
        }

        $user = $rows[0];
        if(!Hash::check($data['password'], $user->password)){
            return back() ->withErrors(['password' => 'Senha inválida'])->withInput();
        }

        sessipn([
            'admin_user_id'=>$user->id,
            'admin_user_name'=>$user->name,
            'is_superadmin'=>(bool)$user->is_superadmin,
        ]);

        return redirect()->route('admin.clientes');

    }

    public function logout(){
        session()->forget(['admin_user_id','admin_user_name','is_superadmin']);
        return redirect()->route('admin.login.form')->with('success','Você saiu');
    }
}
