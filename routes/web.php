<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/wellcome', function () {
    return view('wellcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



use App\Models\product;

Route::get('/products', function () {
    $products = product::with('category')->get();
    return view('products.index', compact('products'));
});

use App\Models\category;

Route::get('/categories', function () {
    $categories = category::all();
    return view('categories.index', compact('categories'));
});

//role untuk middleware 
use App\Http\Controllers\productController;

Route::get('/products/create', [productController::class, 'create']);
Route::post('/products', [productController::class, 'store']);

Route::get('/product/create', [ProductController::class, 'create'])->name('product-create');
Route::post('/product', [ProductController::class, 'store'])->name('product-store');

Route::get('/dashboard', function () {
    return redirect('/products');
});


//percobaan


Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth','RoleCheck:admin'])->name('dashboard');  

Route::get('/rahasia', function (): string{
    return 'ini path rahasia';
})->middleware(['auth', 'RoleCheck:admin'])->name('rahasia');

require __DIR__.'/auth.php';

// use App\Http\Controllers\ProductController;

Route::get('/angka/{angka}', [ProductController::class, 'index'])
    ->middleware('role:admin,owner');


// require __DIR__.'/auth.php';
// use App\Http\Controllers\Barang;    

    route::group(['prefix' => 'admin'],function(){//cara mengaksesnya http://localhost:8000/admin/langsung
        route::get('/langsung', function(){
          echo "ini tampilan dari function routes langsung";});
    });

    route::get('/group_route', function(){
        //cara mengaksesnya http://localhost:8000/admin/group_route_satu
        echo "ini tampilan dari group route";
    });

    Route::get('/route_count/{id}', [productController::class, 'show']);

    //akses produk controler 
    route::get('/produk', [productController::class, 'index']);
    // $nama = "Produk A";
    // return view('produk', compact('nama'));


// UTS
use App\Http\Controllers\UtsController;

// Route::prefix('uts')->group(function () {
//     Route::get('/index', [UtsController::class, 'index']);
//     Route::get('/uts/web', [UtsController::class, 'web']);
//     Route::get('/database', [UtsController::class, 'database']);
// });







