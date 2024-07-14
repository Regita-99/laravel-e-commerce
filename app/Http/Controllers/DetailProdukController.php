<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DetailProdukController extends Controller
{
    public function index($id){
        $item = Product::findOrFail($id);
        return view('Front.detailProduk', compact('item'));
    }
    public function show($id){
        $item = Product::findOrFail($id);
        return view('Front.detailProduk', compact('item'));
    }
}
