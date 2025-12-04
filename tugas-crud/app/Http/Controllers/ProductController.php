<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('master-data.product-master.index', compact('products'));
    }

    public function create()
    {
        return view('master-data.product-master.create-product');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'unit' => 'required',
            'type' => 'required',
            'information' => 'nullable',
            'qty' => 'required|integer',
            'producer' => 'required',
        ]);

        Product::create($request->all());
        return redirect()->route('products.index')->with('success','Product created successfully');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('master-data.product-master.edit-product', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required',
            'unit' => 'required',
            'type' => 'required',
            'information' => 'nullable',
            'qty' => 'required|integer',
            'producer' => 'required',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('products.index')->with('success','Product updated successfully');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success','Product deleted successfully');
    }
}
