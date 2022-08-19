<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
        return view('site.login');
    }
    public function param($nome, $comentario) {
        return view('site.loginParam', ['nome' => $nome, 'comentario' => $comentario]);
    }
}
