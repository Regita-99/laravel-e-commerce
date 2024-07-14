<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.dashboard', compact('products'));
    }

    

    public function store(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Menambahkan validasi untuk jenis file gambar
        ]);

        $produk = new Product();

        $produk->name = $request->input('name');
        $produk->price = $request->input('price');
        $produk->image = $request->input('image');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/image' . $filename);
            $produk->image = $filename;
        } else{
            return $request;
            $produk ->image = '';
        }

        $produk->save();

        return  redirect()->route('/admin')->with('success', 'Produk berhasil ditambahkan'); // Redirect ke halaman admin setelah berhasil
    
    }
}
