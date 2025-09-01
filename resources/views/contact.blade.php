<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    holaa 
    ini halaman contact

    <h3>Menu ke Pengguna:</h3>
    <ul>
        <li><a href="{{ route('pengguna.page', ['id' => 1]) }}">Pengguna ID 1</a></li>
        <li><a href="{{ route('pengguna.page', ['id' => 2]) }}">Pengguna ID 2</a></li>
        <li><a href="{{ route('pengguna.page', ['id' => 3]) }}">Pengguna ID 3</a></li>
    </ul>
    
</body>
</html>