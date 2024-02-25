@extends('layout.main')

@section('home')
    <div class="site-sectio" id="classes-section">
        <div class="bgimg" style="background-image: url('{{ asset('assets/workout-master/images/bg_1.jpg') }}');"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-7">
                        <h2 class=""> Selamat Datang di Workout.Gym Fitness</h2>
                        <p class="lead mx-auto desc mb-5">Di workout.gym ini, kami berkomitmen untuk menjadi mitra terbaik Anda dalam mencapai tujuan kesehatan dan kebugaran Anda.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-8 section-heading">
                        <h2 class="heading mb-3">Kenapa Anda Harus Memilih Kami</h2>
                    </div>
                </div>

                <!-- Slider -->
                <div class="owl-carousel nonloop-block-14 block-14" data-aos="fade">
                    <div class="slide">
                        <div class="ftco-feature-1">
                            <span class="icon flaticon-stationary-bike"></span>
                            <div class="ftco-feature-1-text">
                                <h2>Peralatan Modern </h2>
                                <p>Kami menyediakan peralatan modern dari mesin kardio hingga zona angkat berat serta kami memiliki segala yang Anda butuhkan dalam perjalanan kebugaran Anda.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="ftco-feature-1">
                            <span class="icon flaticon-gym-1"></span>
                            <div class="ftco-feature-1-text">
                                <h2>Pelatih Profesional</h2>
                                <p>Para pelatih kami adalah mereka yang sudah berpengalaman dalam bidangnya, bersertifikasi, dan tentunya
                                     sudah lolos tahap seleksi. Mereka tidak hanya akan membimbing anda tetapi juga akan memberikan motivasi dan dukungan yang Anda butuhkan dalam perjalanan kebugaran Anda</p>
                            </div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="ftco-feature-1">
                            <span class="icon flaticon-gym"></span>
                            <div class="ftco-feature-1-text">
                                <h2>Beragam Kelas</h2>
                                <p>Anda bisa mencoba beragam kelas yang kami sediakan dengan bergabung bersama kami. Kelas-kelas yang menantang dan
                                   seru akan membuat Anda merasa senang melakukan olahraga bersama-sama dan tidak membosankan.</p>
                            </div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="ftco-feature-1">
                            <span class="icon flaticon-vegetables"></span>
                            <div class="ftco-feature-1-text">
                                <h2>Berfokus pada kesehatan</h2>
                                <p>Kami tidak hanya fokus dalam fasilitas sarana yang menunjang tujuan fitnes Anda, karena semua proses harus direkam dengan menggunakan alat yang kami sediakan. Anda bisa tracking progress yang sudah tercapai dari awal bergabung dengan kami.</p>
                            </div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="ftco-feature-1">
                            {{-- <i class="fa-solid fa-building-shield"></i> --}}
                            <span class="icon flaticon-fit"></span>
                            <div class="ftco-feature-1-text">
                                <h2>Kenyamanan dan Keamanan</h2>
                                <p>Keselamatan dan kenyamanan Anda adalah prioritas utama kami. Kami selalu memastikan bahwa lingkungan gym kami bersih, aman, dan nyaman bagi semua anggota.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="bgimg" style="background-image: url('{{ asset('assets/workout-master/images/bg_2.jpg')}}');" data-stellar-background-ratio="0.5">

            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-7">
                        <h2 class="text-cneter">Tunggu apalagi buruan join kelas kami.
                            </h2>
                        <p class="lead mx-auto desc mb-5">Untuk infomarsi lebih lengkap bisa hubungi kontak yang tertera di bawah.</p>
                    </div>
                </div>
            </div>

        </div>

        </div>
    </div>
@endsection
