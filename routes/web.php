<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UtsController;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

// ============================================
// BASIC ROUTES
// ============================================
Route::get('/wellcome', function () {
    return view('wellcome');
});

// ============================================
// AUTHENTICATION ROUTES
// ============================================
Route::get('/dashboard', function () {
    return redirect('/products');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ============================================
// ROLE MIDDLEWARE ROUTES
// ============================================
Route::get('/rahasia', function (): string {
    return 'ini path rahasia';
})->middleware(['auth', 'RoleCheck:admin'])->name('rahasia');

Route::get('/angka/{angka}', [ProductController::class, 'index'])
    ->middleware('role:admin,owner');

// ============================================
// PRODUCT ROUTES (CRUD)
// ============================================
Route::get('/products', [ProductController::class, 'index'])->name('product-index');
Route::get('/products/create', [ProductController::class, 'create'])->name('product-create');
Route::post('/products', [ProductController::class, 'store'])->name('product-store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('product-edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('product-update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('product-destroy');

// Export Excel
Route::get('/products/export-excel', [ProductController::class, 'exportExcel'])->name('products.exportExcel');

// ============================================
// CATEGORY ROUTES
// ============================================
Route::get('/categories', function () {
    $categories = Category::all();
    return view('categories.index', compact('categories'));
});

// ============================================
// GROUP ROUTES (Admin)
// ============================================
Route::group(['prefix' => 'admin'], function() {
    Route::get('/langsung', function() {
        echo "ini tampilan dari function routes langsung";
    });
});

Route::get('/group_route', function() {
    echo "ini tampilan dari group route";
});

Route::get('/route_count/{id}', [ProductController::class, 'show']);

// ============================================
// UTS ROUTES
// ============================================
Route::prefix('uts')->group(function () {
    Route::get('/index', [UtsController::class, 'index']);
    Route::get('/web', [UtsController::class, 'web']);
    Route::get('/database', [UtsController::class, 'database']);
});

// ============================================
// PRAKTIKUM 5 - PRODUK ALERT (TUGAS BARU)
// ============================================
Route::get('/produk/{angka}', [ProdukController::class, 'index'])->name('produk');

// ============================================
// AUTH ROUTES
// ============================================
require __DIR__.'/auth.php';