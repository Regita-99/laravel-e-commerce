<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('Auth.login');
    }
    public function register(){
        return view('Auth.register');
    }
    public function auth_login(Request $request){
        // dd($request->all());
        $remember = !empty($request->remember) ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password'=> $request->password], $remember)){
            return redirect('Front/beranda');
        }else{
            return redirect()->back()->with('error', "Please enter correct email and password");
        }
    }
}
