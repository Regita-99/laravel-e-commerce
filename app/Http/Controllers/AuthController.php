<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('Front.login');
    }
    public function register(){
        return view('Front.register');
    }
}
