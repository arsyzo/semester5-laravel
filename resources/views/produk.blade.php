<!DOCTYPE html>
<html lang="id">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk - Praktikum 5</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3>Praktikum 5 - Alert Component</h3>
            </div>
            <div class="card-body">
                <h5>Halaman Produk</h5>
                <p>Parameter yang dikirim: <strong>{{ $angka }}</strong></p>
                
                <!-- Panggil component Alert -->
                <x-alert :type="$alertType">
                    {{ $pesan }}
                </x-alert>

                <hr>

                <div class="mt-4">
                    <h6>Coba angka lain:</h6>
                    <a href="{{ url('/produk/1') }}" class="btn btn-sm btn-outline-primary">Angka 1</a>
                    <a href="{{ url('/produk/2') }}" class="btn btn-sm btn-outline-primary">Angka 2</a>
                    <a href="{{ url('/produk/3') }}" class="btn btn-sm btn-outline-primary">Angka 3</a>
                    <a href="{{ url('/produk/4') }}" class="btn btn-sm btn-outline-primary">Angka 4</a>
                    <a href="{{ url('/produk/5') }}" class="btn btn-sm btn-outline-primary">Angka 5</a>
                    <a href="{{ url('/produk/10') }}" class="btn btn-sm btn-outline-primary">Angka 10</a>
                </div>
            </div>
            <div class="card-footer text-muted">
                © 2024 Praktikum 5 Laravel
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>