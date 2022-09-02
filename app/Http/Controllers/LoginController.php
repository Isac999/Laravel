<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    public function login() {
        return view('site.login');
    }
    public function insert(Request $request) {
        //print_r($request->all());
        /*
        $login = new Login();
        $login->email = $request->input('email');
        $login->password = $request->input('password');
        $login->save();
        */

        //caso a validação do post não seja atendida com os dados, haverá um redirecionamento para a rota anterior
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        Login::create($request->all());
        return view('site.login');
    }
}
