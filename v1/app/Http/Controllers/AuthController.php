<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){

       return view('telas.index');
    }

    public function logout(){

        echo "Login_aut";
    }
}
