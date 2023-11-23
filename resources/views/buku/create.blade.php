<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="{{ asset('css/tambahBuku.css') }}">
</head>
<body>
<h1 class="title">Tambah buku</h1>
<form method="POST" action="/" class="form-buku">
    @csrf
    <label for="judulBuku">Judul Buku:</label>
    <input type="text" name="judulBuku" id="judulBuku" required>
    <label for="deskripsiBuku">Deskripsi:</label>
    <textarea id="deskripsiBuku" name="deskripsiBuku" rows="4" cols="50" required></textarea>
    <label for="harga">Harga:</label>
    <input type="text" name="harga" id="harga" required>
    <label for="tanggalPinjam">Tanggal Pinjam:</label>
    <input type="date" name="tanggalPinjam" id="tanggalPinjam" required>
    <label for="tanggalPengembalian">Tanggal Pengembalian:</label>
    <input type="date" name="tanggalPengembalian" id="tanggalPengembalian" required>
    <button type="submit">Simpan</button>
    <button><a href="/">Kembali</a></button>
</form>
</body>
</html>
