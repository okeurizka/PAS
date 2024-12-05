@extends('layout.layout2')

@section('title', 'Post Create')

@section('content')

    <div class="container m-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        NEW POST
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            @foreach ($errors->all() as $error)
                                {{ $error }} <br>
                            @endforeach
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('pesanans.store') }}" class="p-3">
                        @csrf
                        <h3>Formulir Pesanan</h3>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Pemesan</label>
                            <input type="text" class="form-control" id="nama" name="nama" >
                        </div>
                        <div class="mb-3">
                            <label for="notelp" class="form-label">Nomor Telepon/WhatsApp</label>
                            <input type="tel" class="form-control" id="notelp" name="notelp" >
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Lengkap</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="product" class="form-label">Produk yang Dipesan</label>
                            <select class="form-select" id="product" name="product" >
                                <option value="Ayam Goreng">Ayam Goreng</option>
                                <option value="Bebek Goreng">Bebek Goreng</option>
                                <option value="Lele Goreng">Lele Goreng</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" min="1"
                                >
                        </div>
                        <div class="mb-3">
                            <label for="catatan" class="form-label">Catatan Pesanan</label>
                            <textarea class="form-control" id="catatan" name="catatan" rows="2"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="pembayaran" class="form-label">Metode Pembayaran</label>
                            <select class="form-select" id="pembayaran" name="pembayaran" >
                                <option value="COD">Tunai (COD)</option>
                                <option value="Transfer Bank">Transfer Bank</option>
                                <option value="E-Wallet">E-Wallet (Gopay, OVO, DANA)</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
