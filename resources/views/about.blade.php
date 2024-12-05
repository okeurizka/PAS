@extends('layout.layout2')

@section('title', 'Studio Lalapan')

@section('content')
    <h1 class="text-center mt-3">About restaurant</h1>
    <div class="row row-cols-1 row-cols-md-2 g-4 px-5 pt-5">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Studio Lalapan: Dari Dapur ke Hati Anda</h5>
                    <p class="card-text">"Studio Lalapan adalah tempat di mana cita rasa Indonesia berpadu dengan suasana
                        hangat. Kami bangga menyajikan lalapan autentik yang diracik dari bahan segar dan resep tradisional
                        keluarga."</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Sejarah Singkat</h5>
                    <p class="card-text">Dimulai dari dapur kecil di tahun 2010, Studio Lalapan lahir dari cinta kami
                        terhadap masakan tradisional Indonesia. Berawal dari resep nenek, kami kini telah melayani ribuan
                        pelanggan yang menghargai cita rasa Nusantara.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-6">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/150" class="img-fluid rounded-start" alt="Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text">“Studio Lalapan selalu menjadi pilihan keluarga kami untuk makan
                                    bersama. Daging empuk, sambalnya luar biasa, dan suasananya sangat nyaman.”<span
                                        class="text-muted"> -Diana, pelanggan setia</span>
                                </p>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-6">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/150" class="img-fluid rounded-start" alt="Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text">“Harganya sangat terjangkau untuk kualitas makanan seperti ini. Ayam
                                    gorengnya crispy di luar tapi juicy di dalam. Wajib coba paket hematnya!”<span
                                        class="text-muted"> – Siti, mahasiswa</span>
                                </p>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-6">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/150" class="img-fluid rounded-start" alt="Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text">“Menu favorit saya adalah Ikan Bakar Sambal Mangga. Kombinasi pedas,
                                    manis, dan segarnya sambal membuat saya terus kembali ke Studio Lalapan!”
                                    <span class="text-muted">– Adi, pelanggan tetap.</span>
                                </p>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-md-6">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/150" class="img-fluid rounded-start" alt="Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text">“Kalau kalian cari tempat makan yang enak dan terjangkau, Studio
                                    Lalapan wajib dicoba. Pesan lewat aplikasi pun makanannya tetap hangat dan fresh!”
                                    <span class="text-muted"> – Hendra, pecinta kuliner.</span>
                                </p>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row align-items-center">
            <!-- Bagian Peta -->
            <div class="col-md-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.208484344947!2d112.74836093430626!3d-7.767702890195418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d3c5631acbf5%3A0xa71d9f205034b481!2sSMK%20Negeri%201%20Purwosari!5e0!3m2!1sid!2sid!4v1733058323614!5m2!1sid!2sid"
                    width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div id="map"></div>
            </div>
            <!-- Bagian Informasi -->
            <div class="col-md-6">
                <h3>Lokasi & Jam Operasional</h3>
                <p><strong>Alamat:</strong><br>
                    Jalan Rivet Town No. 1, Great Mine, Jarilo-VI</p>
                <p><strong>Jam Operasional:</strong><br>
                    Senin - Jumat: 10:00 - 21:00<br>
                    Sabtu - Minggu: 09:00 - 23:00</p>
                <p><strong>Telepon:</strong><br>
                    +62 812-3456-7890</p>
            </div>
        </div>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script>
        function initMap() {
            const location = {
                lat: -7.767516858328608,
                lng: 1112.74827510361683
            };

            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 14,
                center: location,
            });

            const marker = new google.maps.Marker({
                position: location,
                map: map,
                title: "Studio Lalapan",
            });
        }

        // Inisialisasi Peta setelah Halaman Dimuat
        window.onload = initMap;
    </script>

@endsection
