@extends('layout.main')
@section('trainer')
    <div class="site-section" id="trainer-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
                <div class="col-md-8  section-heading">
                    <span class="subheading">Trainer</span>
                    <h2 class="heading mb-3">Our Trainers</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                        the blind
                        texts.
                        Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                    </p>
                </div>
            </div>

            <div class="row">
                @foreach ($pelatih as $data)
                    <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="">
                        <div class="person">
                            <img src="{{ asset('storage/posts/' . $data->image) }}" alt="Image" class="img-fluid">
                            <h3>{{ $data->nama_pelatih }}</h3>
                            <p class="position">Trainer</p>
                            <p>{{ $data->deskripsi }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
