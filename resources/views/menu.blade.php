@extends('layout.layout2')

@section('title', 'Studio Lalapan')

@section('content')

    <div class="container-fluid">
        <div class="row ">
            <!-- Sidebar -->
            <nav class="col-2 ps-5 border-end sidebar">
                <h4 class="text-center mt-3">Menu </h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover active"
                            href="#appetizers">Appetizers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover "
                            href="#main-courses">Main Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                            href="#desserts">Desserts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover "
                            href="#drinks">Drinks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                            href="#specials">Chef Specials</a>
                    </li>
                </ul>
            </nav>

            <!-- Main Content -->
            <main class="col-9 content m-3">
                <section id="appetizers">
                    <h2>Appetizers</h2>
                    <div class="row row-cols-1 row-cols-md-4 g-4 p-2">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Pisang Goreng</h5>
                                    <p class="card-text">"Pisang yang digoreng dengan adonan tepung."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Tahu Isi</h5>
                                    <p class="card-text">"Tahu yang diisi sayuran atau daging dan digoreng."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Pempek Kecil</h5>
                                    <p class="card-text">"Pempek ukuran kecil dengan cuka pedas."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Rempeyek</h5>
                                    <p class="card-text">"Kerupuk tipis dengan kacang tanah atau teri."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="main-courses">
                    <h2>Main Courses</h2>
                    <div class="row row-cols-1 row-cols-md-4 g-4 p-2">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Ayam Goreng/Bakar Lalapan</h5>
                                    <p class="card-text">"Pisang yang digoreng dengan adonan tepung."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Lele Goreng/Bakar Lalapan</h5>
                                    <p class="card-text">"Tahu yang diisi sayuran atau daging dan digoreng."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Ikan Nila/Bandeng Lalapan</h5>
                                    <p class="card-text">"Pempek ukuran kecil dengan cuka pedas."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Tahu & Tempe Goreng Lalapan</h5>
                                    <p class="card-text">"Kerupuk tipis dengan kacang tanah atau teri."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Bebek Goreng/Bakar Lalapan</h5>
                                    <p class="card-text">"Kerupuk tipis dengan kacang tanah atau teri."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="desserts">
                    <h2>Desserts</h2>
                    <div class="row row-cols-1 row-cols-md-4 g-4 p-2">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Pisang Goreng Keju</h5>
                                    <p class="card-text">"Pisang goreng keju adalah pisang goreng renyah dengan taburan keju
                                        parut, sering ditambah susu atau cokelat."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Klepon Gula Aren</h5>
                                    <p class="card-text">"Klepon gula aren adalah jajanan tradisional berbentuk bulat,
                                        terbuat dari tepung ketan berisi gula aren cair, dan dilapisi kelapa parut."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Es Campur</h5>
                                    <p class="card-text">"Es campur adalah minuman segar berisi aneka bahan seperti buah,
                                        cincau, agar-agar, sirup, susu, dan es serut."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="drinks">
                    <h2>Drinks</h2>
                    <div class="row row-cols-1 row-cols-md-4 g-4 p-2">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Es Teh Manis</h5>
                                    <p class="card-text">"Teh manis dingin dengan es batu, cocok untuk penyegar dahaga."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Es Jeruk Peras</h5>
                                    <p class="card-text">"Minuman segar dari perasan jeruk asli dengan tambahan es."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Teh Poci (Gula Batu)</h5>
                                    <p class="card-text">"Teh khas dalam poci tanah liat, manis alami dari gula batu."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Es Cincau Gula Aren</h5>
                                    <p class="card-text">"Minuman cincau hitam dengan sirup gula aren dan es."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Es Kelapa Muda</h5>
                                    <p class="card-text">"Air kelapa muda segar dengan daging kelapa dan es batu."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="sambel">
                    <h2>variasi sambel</h2>
                    <div class="row row-cols-1 row-cols-md-4 g-4 p-2 mb-5">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Sambel Terasi</h5>
                                    <p class="card-text">"Sambal pedas dengan bahan utama terasi, cabai, dan bumbu
                                        lainnya."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Sambel Bawang</h5>
                                    <p class="card-text">"Sambal yang terbuat dari cabai, bawang merah, dan bumbu,
                                        memberikan rasa pedas dan gurih."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Sambel Ijo</h5>
                                    <p class="card-text">"Sambal hijau berbahan cabai hijau, tomat, dan rempah, dengan rasa
                                        pedas segar."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Sambel Matah</h5>
                                    <p class="card-text">"Sambal khas Bali dengan bahan cabai, bawang merah, serai, dan
                                        minyak kelapa, memberikan rasa segar dan pedas."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

@endsection
