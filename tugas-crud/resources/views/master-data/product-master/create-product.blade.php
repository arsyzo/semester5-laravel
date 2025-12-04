<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Add New Product</h2>
<form action="{{ route('products.store') }}" method="POST" class="mt-3">
    @csrf

    <div class="mb-3">
        <label class="form-label">Product Name</label>
        <input class="form-control" type="text" name="product_name">
    </div>

    <div class="mb-3">
        <label class="form-label">Unit</label>
        <input class="form-control" type="text" name="unit">
    </div>

    <div class="mb-3">
        <label class="form-label">Type</label>
        <input class="form-control" type="text" name="type">
    </div>

    <div class="mb-3">
        <label class="form-label">Information</label>
        <input class="form-control" type="text" name="information">
    </div>

    <div class="mb-3">
        <label class="form-label">Qty</label>
        <input class="form-control" type="number" name="qty">
    </div>

    <div class="mb-3">
        <label class="form-label">Producer</label>
        <input class="form-control" type="text" name="producer">
    </div>

    <button class="btn btn-success" type="submit">Save</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
</form>

</body>
</html>
