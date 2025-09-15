<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;

class productController extends Controller
{
    // Tampilkan form input produk
    public function create()
    {
        $categories = category::all(); // Untuk dropdown kategori
        return view('products.create', compact('categories'));
    }

    // Simpan data produk ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable',
            'category_id' => 'required|exists:categories,id',
        ]);

        product::create($request->all());

        return redirect('/products')->with('success', 'Produk berhasil ditambahkan!');
    }
}