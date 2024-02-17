@extends('layout.main')


@section('classes')
<div class="site-section" id="classes-section">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-8  section-heading">
          {{-- <span class="subheading">Fitness Class</span> --}}
          <h2 class="heading mb-3">Kelas Kami</h2>
          <p>Di EvolveEra Gym, kami menawarkan berbagai kelas kebugaran yang dirancang untuk memenuhi kebutuhan dan minat beragam para pelanggan kami. Dari kelas kardio yang menyenangkan hingga latihan kekuatan yang menantang, kami memiliki sesuatu untuk semua tingkat kebugaran dan preferensi. </p>
        </div>
      </div>
      <div class="row">
        @foreach ($kelas as $class)
        <div class="col-lg-6">
          <div class="class-item d-flex align-items-center">
            <a href="#" class="class-item-thumbnail">
              <img src="{{ asset('storage/posts/' . $class->image)}}" style="height: 7rem; width: 25rem; object-fit:cover; border-radius: 0.25rem" alt="Image">
            </a>
            <div class="class-item-text">

              <h2><a href="single.html">{{ $class->nama_kelas }}</a></h2>
              <span>{{ $class->nama_pelatih }}</span>,
              <span>{{ $class->durasi }} menit</span>
            </div>
          </div>


        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
