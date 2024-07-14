<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DaftarProdukController extends Controller
{
    public function index(){
        $list = Product::latest()->get();
        return view('Front.daftarProduk',compact('list'));
    } 
}
