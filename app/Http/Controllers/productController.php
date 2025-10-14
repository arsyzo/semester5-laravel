<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;

class productController extends Controller
{
    // Tampilkan form input produk
    // public function create()
    // {
    //     $categories = category::all(); // Untuk dropdown kategori
    //     return view('products.create', compact('categories'));
    // }

    // Simpan data produk ke database
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'price' => 'required|numeric',
    //         'description' => 'nullable',
    //         'category_id' => 'required|exists:categories,id',
    //     ]);

    //     product::create($request->all());

    //     return redirect('/products')->with('success', 'Produk berhasil ditambahkan!');
    // }

    
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'unit' => 'required|string|max:50',
            'type' => 'required|string|max:50',
            'information' => 'nullable|string',
            'qty' => 'required|integer',
            'producer' => 'required|string|max:255',
        ]);

        product::create($validasi_);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan!');
    }

    public function show(string $id)
    {
        return view('barang',[
            'isi_data' => $id
        ]);
        
    }

    public function index()
    {
        $nama = "mahasiswa UNSIKA";
        return view('produk', data:['nama' => $nama, 'alertmessage' => 'selamat belajar blade', 'alerttype' => 'success']);
    }

    public function create()
    {
        return view("master-data.product-master.create-product");
    }

    
    



}









