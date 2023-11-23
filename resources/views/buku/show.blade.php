<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Buku</title>
</head>
<body>
    <h1>Detail Buku</h1>
    @if($buku)
    <div>
        <p>Judul Buku: {{ $buku->judulBuku }}</p>
        <p>Deskripsi: {{ $buku->deskripsiBuku }}</p>
        <p>Harga: {{ $buku->harga }}</p>
        <p>Tanggal Pinjam: {{ $buku->tanggalPinjam }}</p>
        <p>Tanggal Pengembalian: {{ $buku->tanggalPengembalian }}</p>
    </div>
    @else
    <p>Siswa tidak ditemukan.</p>
    @endif
</body>
</html>
