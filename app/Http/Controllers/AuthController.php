<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        // dd(Hash::make(123456));
        return view('Auth.login');
    }
    public function register(){
        return view('Auth.register');
    }
    public function auth_login(Request $request){
        // dd($request->all());
        $remember = !empty($request->remember) ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password'=> $request->password], $remember)){
            return redirect('/Admin');
        }else{
            return redirect()->back()->with('error', "Please enter correct email and password");
        }
    }
    public function logout(){
        Auth::logout();
        return redirect(url('/login'));
    }
}
