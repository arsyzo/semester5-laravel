<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Edit Product</h2>
<form action="{{ url('master-data/products/'.$product->id.'/update') }}" method="POST" class="mt-3">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Product Name</label>
        <input class="form-control" type="text" name="product_name" value="{{ $product->product_name }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Unit</label>
        <input class="form-control" type="text" name="unit" value="{{ $product->unit }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Type</label>
        <input class="form-control" type="text" name="type" value="{{ $product->type }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Information</label>
        <input class="form-control" type="text" name="information" value="{{ $product->information }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Qty</label>
        <input class="form-control" type="number" name="qty" value="{{ $product->qty }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Producer</label>
        <input class="form-control" type="text" name="producer" value="{{ $product->producer }}">
    </div>

    <button class="btn btn-primary" type="submit">Update</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
</form>

</body>
</html>
