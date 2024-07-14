<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $item = Product::latest()->get();
        return view('Admin.Admin', compact('item'));
    }

    public function store(Request $request){
        $produk = new Product();

        $produk->name = $request->input('name');
        $produk->price = $request->input('price');
        $produk->image = $request->input('image');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('img/images'), $filename); // Simpan file ke direktori 'public/images'
            $produk->image = $filename; // Simpan nama file ke dalam kolom 'image'
        } else {
            $produk->image = ''; // Atau nilai default jika tidak ada file yang diunggah
        }

        $produk->save();

        return  redirect()->route('Admin')->with('success', 'Produk berhasil ditambahkan'); // Redirect ke halaman admin setelah berhasil    }
    }

    
}