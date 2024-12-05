<!-- resources/views/posts/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('pesanans.update', $pesanan) }}" class="p-3">
            @csrf
            @method('PUT')
            <h3>Edit Pesanan</h3>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pemesan</label>
                <input type ="text" class="form-control" id="nama" name="nama" value="{{ $pesanan->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="notelp" class="form-label">Nomor Telepon/WhatsApp</label>
                <input type="text" class="form-control" id="notelp" name="notelp" value="{{ $pesanan->notelp }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Lengkap</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ $pesanan->alamat }}</textarea>
            </div>
            <div class="mb-3">
                <label for="product" class="form-label">Produk yang Dipesan</label>
                <select class="form-select" id="product" name="product" required>
                    <option value="Ayam Goreng" {{ $pesanan->product == 'Ayam Goreng' ? 'selected' : '' }}>Ayam Goreng</option>
                    <option value="Bebek Goreng" {{ $pesanan->product == 'Bebek Goreng' ? 'selected' : '' }}>Bebek Goreng
                    </option>
                    <option value="Lele Goreng" {{ $pesanan->product == 'Lele Goreng' ? 'selected' : '' }}>Lele Goreng</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $pesanan->jumlah }}"
                    min="1" required>
            </div>
            <div class="mb-3">
                <label for="catatan" class="form-label">Catatan Pesanan</label>
                <textarea class="form-control" id="catatan" name="catatan" rows="2">{{ $pesanan->catatan }}</textarea>
            </div>
            <div class="mb-3">
                <label for="pembayaran" class="form-label">Metode Pembayaran</label>
                <select class="form-select" id="pembayaran" name="pembayaran" required>
                    <option value="COD" {{ $pesanan->pembayaran == 'COD' ? 'selected' : '' }}>Tunai (COD)</option>
                    <option value="Transfer Bank" {{ $pesanan->pembayaran == 'Transfer Bank' ? 'selected' : '' }}>Transfer Bank
                    </option>
                    <option value="E-Wallet" {{ $pesanan->pembayaran == 'E-Wallet' ? 'selected' : '' }}>E-Wallet (Gopay, OVO,
                        DANA)</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary">Tutup</button>
                <button type="submit" class="btn btn-primary">Perbarui Pesanan</button>
            </div>
        </form>
    </div>
@endsection
