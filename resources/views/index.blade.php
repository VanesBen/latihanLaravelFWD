<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
<h1>Daftar Produk</h1>
<ul>
    @foreach ($products as $product)
        <li>
            {{ $product['nama_layanan'] }} - Rp {{ number_format($product['harga']) }}
        </li>
    @endforeach
</ul>
</body>
</html>