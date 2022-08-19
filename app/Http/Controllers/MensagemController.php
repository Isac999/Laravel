<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mensagemController extends Controller
{
    public function param($nome, $comentario) {
        return view('site.mensagem', ['nome' => $nome, 'comentario' => $comentario]);
    }
}
