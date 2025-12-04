@extends('layout')

@section('content')
<div class="container mt-4">
    <h3>Edit Produk</h3>
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf @method('PUT')
        <input class="form-control mb-2" name="name" value="{{ $product->name }}">
        <input class="form-control mb-2" name="price" value="{{ $product->price }}">
        <input class="form-control mb-2" name="stock" value="{{ $product->stock }}">
        <textarea class="form-control mb-2" name="description">{{ $product->description }}</textarea>
        <button class="btn btn-success">Update</button>
    </form>
</div>
@endsection
