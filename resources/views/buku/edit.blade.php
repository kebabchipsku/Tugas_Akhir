<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="{{ asset('css/tambahBuku.css') }}">
</head>
<body>
<h1 class="title">Edit buku</h1>
<form method="POST" action="{{ url('/buku/' . $buku->id) }}" class="form-buku">
    @csrf
    @method('PUT')
    <label for="judulBuku">Judul Buku:</label>
    <input type="text" name="judulBuku" id="judulBuku" value="{{$buku->judulBuku}}">
    <label for="deskripsiBuku">Deskripsi:</label>
    <textarea id="deskripsiBuku" name="deskripsiBuku" rows="4" cols="50" required>{{$buku->deskripsiBuku}}
    </textarea>
    <label for="harga">Harga:</label>
    <input type="text" name="harga" id="harga" value="{{$buku->harga}}">
    <label for="tanggalPinjam">Tanggal Pinjam:</label>
    <input type="date" name="tanggalPinjam" id="tanggalPinjam" value="{{$buku->tanggalPinjam}}">
    <label for="tanggalPengembalian">Tanggal Pengembalian:</label>
    <input type="date" name="tanggalPengembalian" id="tanggalPengembalian" value="{{$buku->tanggalPengembalian}}">
    <button type="submit">Update</button>
    <button><a href="/">Kembali</a></button>
</form>
</body>
</html>
