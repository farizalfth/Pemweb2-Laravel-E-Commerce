<!DOCTYPE html>
<html>
<head>
    <title>Kategori Produk</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Kategori Produk</h1>

        <ul class="list-group mb-4">
            @foreach ($categories as $category)
                <li class="list-group-item">{{ $category }}</li>
            @endforeach
        </ul>

        <!-- Tombol Kembali -->
        <a href="{{ url('/') }}" class="btn btn-primary">Kembali ke Homepage</a>
    </div>

    <!-- Link ke Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
