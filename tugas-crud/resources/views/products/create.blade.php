@extends('layout')

@section('content')
<div class="container mt-4">
    <h3>Tambah Produk</h3>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <input class="form-control mb-2" name="name" placeholder="Nama">
        <input class="form-control mb-2" name="price" placeholder="Harga">
        <input class="form-control mb-2" name="stock" placeholder="Stok">
        <textarea class="form-control mb-2" name="description" placeholder="Deskripsi"></textarea>
        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
