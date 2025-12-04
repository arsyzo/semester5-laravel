<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="mb-4">Product Master</h2>

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">+ Add Product</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Unit</th>
            <th>Type</th>
            <th>Info</th>
            <th>Qty</th>
            <th>Producer</th>
            <th>Action</th>
        </tr>
        </thead>

        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->unit }}</td>
                <td>{{ $product->type }}</td>
                <td>{{ $product->information }}</td>
                <td>{{ $product->qty }}</td>
                <td>{{ $product->producer }}</td>
                <td>
                    <a href="{{ url('master-data/products/'.$product->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ url('master-data/products/'.$product->id.'/delete') }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete product?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

</body>
</html>
