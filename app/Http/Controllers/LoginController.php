<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    public function login(Request $request) {
        //print_r($request->all());
        
        $login = new Login();
        $login->email = $request->input('email');
        $login->password = $request->input('password');
        $login->save();
        
        return view('site.login');
    }
}
