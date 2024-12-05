<?php
// app/Http/Controllers/PostController.php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    // Menampilkan form untuk membuat pesanan
    public function create()
    {
        return view('pesanan.create');
    }

    // Menyimpan pesanan baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'notelp' => 'required|string|max:15',
            'alamat' => 'nullable|string',
            'product' => 'required|string',
            'jumlah' => 'required|integer|min:1',
            'catatan' => 'nullable|string',
            'pembayaran' => 'required|string',
        ]);

        Pesanan::create($request->all());

        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil disimpan.');
    }

    // Menampilkan daftar pesanan
    public function index()
    {
        $pesanans = Pesanan::all();
        return view('pesanan.index', compact('pesanans'));
    }

    // Menampilkan form untuk mengedit pesanan
    public function edit(Pesanan $pesanan)
    {
        return view('pesanan.edit', compact('edit'));
    }

    // Memperbarui pesanan
    public function update(Request $request, Pesanan $pesanan)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'notelp' => 'required|string|max:15',
            'alamat' => 'nullable|string',
            'product' => 'required|string',
            'jumlah' => 'required|integer|min:1',
            'catatan' => 'nullable|string',
            'pembayaran' => 'required|string',
        ]);

        $pesanan->update($request->all());

        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil diperbarui.');
    }

    // Menghapus pesanan
    public function destroy(Pesanan $pesanan)
    {
        $pesanan->delete();
        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil dihapus.');
    }
}