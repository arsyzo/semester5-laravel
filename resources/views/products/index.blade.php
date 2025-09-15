<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Daftar Produk</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                <strong>{{ $product->name }}</strong> - Rp{{ number_format($product->price) }}  
                <br>Kategori: {{ $product->category->name }}
            </li>
        @endforeach
    </ul>

</body>
</html>

