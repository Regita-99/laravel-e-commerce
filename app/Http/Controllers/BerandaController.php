<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //beranda
    public function index(){
        return view('Front.beranda');
    }
}
