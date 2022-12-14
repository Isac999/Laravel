<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Middleware\LogAcessoMiddleware;

class AdminController extends Controller
{
    /*
    adicionando middleware no construtor
    public function __construct() {
        $this->middleware(LogAcessoMiddleware::class);
    }
    */
    public function admin() {
        return view('app.admin');
    }
    public function sair() {
        if(session_start()) {
            session_destroy();
        }
        return redirect()->route('site.login');
    }
}
