<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DetailProdukController extends Controller
{
    // public function index(){
    //     return view('Front.detailProduk');
    // }
    public function show($id)
    {
        $produk = Product::find($id);
        return view('Front.detailProduk', compact('produk'));
    }
}
