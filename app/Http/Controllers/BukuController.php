<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index() {
        $bukuModel = new Buku;

        $buku = $bukuModel->all();

        return view('buku.index', compact('buku'));
    }

    public function create() {
        return view('buku.create');
    }

    public function store(Request $request) {
        $buku = new Buku;
        $buku->judulBuku = $request->input('judulBuku');
        $buku->deskripsiBuku = $request->input('deskripsiBuku');
        $buku->harga = $request->input('harga');
        $buku->tanggalPinjam = $request->input('tanggalPinjam');
        $buku->tanggalPengembalian = $request->input('tanggalPengembalian');
        $buku->save();

        return redirect('/')->with('flash_message', 'Buku berhasil ditambahkan');
    }

    public function show($id_buku) {
        $bukuModel = new Buku;

        $buku = $bukuModel->find($id_buku);

        return view('buku.show', compact('buku'));
    }

    public function edit($id_buku) {
        $bukuModel = new Buku;

        $buku = $bukuModel->find($id_buku);

        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id_buku) {
        $bukuModel = new Buku;

        $buku = $bukuModel->find($id_buku);
        $buku->judulBuku = $request->input('judulBuku');
        $buku->deskripsiBuku = $request->input('deskripsiBuku');
        $buku->harga = $request->input('harga');
        $buku->tanggalPinjam = $request->input('tanggalPinjam');
        $buku->tanggalPengembalian = $request->input('tanggalPengembalian');
        $buku->save();

        return redirect('/')->with('success', 'Buku berhasil diperbarui');
    }

    public function destroy($id) {

        $bukuModel = new Buku;
        $buku = $bukuModel->find($id);
        if ($buku) {
            $buku->delete();
            return redirect('/')->with('success', 'Buku berhasil dihapus.');
        } else {
            return redirect('/')->with('error', 'Buku tidak ditemukan.');
        }
    }

}
