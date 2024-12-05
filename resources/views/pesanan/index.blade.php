<!-- resources/views/posts/index.blade.php -->
@extends('layout.layout2')

@section('content')
    <div class="container">
        <h1>Daftar Pesanan</h1>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <a href="{{ route('pesanans.create') }}" class="btn btn-primary mb-3">Buat Pesanan Baru</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Pemesan</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Catatan</th>
                    <th>Pembayaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pesanans as $pesanan)
                    <tr>
                        <td>{{ $pesanan->nama }}</td>
                        <td>{{ $pesanan->notelp }}</td>
                        <td>{{ $pesanan->alamat }}</td>
                        <td>{{ $pesanan->product }}</td>
                        <td>{{ $pesanan->jumlah }}</td>
                        <td>{{ $pesanan->catatan }}</td>
                        <td>{{ $pesanan->pembayaran }}</td>
                        <td>
                            <a href="{{ route('pesanan.edit', $pesanan) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pesanan.destroy', $pesanan) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
