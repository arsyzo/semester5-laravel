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

use App\Http\Controllers\productController;

Route::get('/products/create', [productController::class, 'create']);
Route::post('/products', [productController::class, 'store']);

