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

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->back()->with('success', 'Product deleted successfully');
    }
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Find the product by ID
        $product = Product::find($id);

        // Update the product details
        $product->name = $request->name;
        $product->price = $request->price;

        // Check if an image file is uploaded
        if ($request->hasFile('image')) {
            // Upload the image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('img/images'), $imageName);

            // Update the product image
            $product->image = $imageName;
        }

        // Save the updated product
        $product->save();

        // Redirect back with a success message
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }
    

}