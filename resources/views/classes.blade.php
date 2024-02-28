@extends('layout.main')


@section('classes')
    <div class="site-section" id="classes-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8  section-heading">
                    {{-- <span class="subheading">Fitness Class</span> --}}
                    <h2 class="heading mb-3">Kelas Kami</h2>
                    <p class="text-black">Di Workout Gym, kami menawarkan berbagai kelas kebugaran yang dirancang untuk memenuhi kebutuhan
                        kesehatan dan kebugaran Anda. Dari kelas kardio yang menyenangkan hingga latihan kekuatan
                        yang menantang, kami memiliki sesuatu untuk semua tingkat kebugaran dan preferensi. </p>
                </div>
            </div>
            <div class="row">
                @foreach ($kelas as $class)
                    <div class="col-lg-6">
                        <div class="class-item d-flex align-items-center">
                             {{-- Untuk menampilkan gambar yang di isi di crud --}}
                            <a href="{{ '/classes/' . $class->id }}" class="class-item-thumbnail">
                                <img src="{{ asset('storage/posts/' . $class->image) }}"
                                    style="height: 7rem; width: 25rem; object-fit:cover; border-radius: 0.25rem"
                                    alt="Image">
                            </a>
                            <div class="class-item-text">
                                {{-- <td>{{ optional ($data->pelatih)->nama_pelatih }}</td> --}}
                                 {{-- Untuk menampilkan nama kelas yang di isi di crud --}}
                                <h2>{{ $class->nama_kelas }}</h2>
                                 {{-- Untuk menampilkan nama pelatih yang di isi di crud --}}
                                <span>By {{ optional ($class->pelatih)->nama_pelatih}}</span>,
                                 {{-- Untuk menampilkan durasi kelas yang di isi di crud --}}
                                <span>{{ $class->durasi }} menit</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $kelas->links() }}
            </div>
        </div>
    </div>
@endsection
