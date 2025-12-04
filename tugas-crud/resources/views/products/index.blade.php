@extends('layout')

@section('content')
<div class="container mt-4">
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

    <table class="table table-bordered">
        <tr>
            <th>Nama</th><th>Harga</th><th>Stok</th><th>Deskripsi</th><th>Aksi</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <a href="{{ route('products.edit',$product->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST" style="display:inline-block;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Hapus?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
