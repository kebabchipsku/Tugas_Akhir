<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Buku Harmoni</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Daftar Buku Toko Harmoni</h1>

    <button><a href="create">Tambah Buku</a></button>
    @if (count($buku) > 0)
    <div class="table-buku">
        <table>
            <tr>
                <th>Judul Buku</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Tanggal Sewa</th>
                <th>Tanggal Kembali</th>
                <th>Action</th>
            </tr>
            @foreach ($buku as $b)
            <tr>
                <td>{{ $b->judulBuku }}</td>
                <td>{{ $b->deskripsiBuku }}</td>
                <td>{{ $b->harga }} / hari</td>
                <td>{{ $b->tanggalPinjam }}</td>
                <td>{{ $b->tanggalPengembalian }}</td>
                <td class="action">
                    <a href="{{ url('/buku/' . $b->id) }}" class="btn-detail">Detail</a>
                    <a href="{{ url('/' . $b->id . '/edit') }}" class="btn-edit">Edit</a>
                    <form action="{{ route('buku.destroy', $b->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="btn-delete"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">
                            Delete
                        </button
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    @else
    <p>Tidak ada data Buku.</p>
    @endif
</body>
</html>
