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

        //caso a validação do post não seja atendida com os padrões dos dados, haverá um redirecionamento para a rota anterior
        $request->validate([
            'email' => 'required|email|min:8|unique:logins',
            'password' => 'required|min:6|max:25'
        ]);
        Login::create($request->all());
        return view('site.login');
    }

    public function verificacao(Request $request) {
        $user = new Login();

        $email = $request->get('email');
        $password = $request->get('password');

        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();
        print_r($usuario);
        if (isset($usuario->email)) {
            session_start();
            $_SESSION['email'] = $usuario->email;
            return redirect()->route('app.admin');
        } else {
            return redirect()->route('site.login');
        }
    }
}
