@extends('layout.main')
@section('trainer')
    <div class="site-section" id="trainer-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
                <div class="col-md-8  section-heading">
                    <h2 class="heading mb-3">Intruksi Kelas Kami</h2>
                    <p class="text-black">Berikut adalah profil singkat dari beberapa instruktur kelas kami:
                    </p>
                </div>
            </div>

            <div class="row">
                @foreach ($pelatih as $data)
                    <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="">
                        <div class="person">
                            <img src="{{ asset('storage/posts/' . $data->image) }}" class="img-fluid rounded-circle w-100" style="height: 7rem; object-fit:cover">
                            <h3>{{ $data->nama_pelatih }}</h3>
                            <p class="position">Pelatih</p>
                            <p class="text-black">{{ $data->deskripsi }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
