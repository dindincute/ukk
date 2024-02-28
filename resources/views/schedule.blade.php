@extends('layout.main')
@section('schedule')
    <div class="site-section" id="schedule-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8  section-heading">
                    <h2 class="heading mb-3">Jadwal</h2>
                    <p class="text-black">Temukan jadwal kelas kami setiap minggunya di sini.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="nav days d-flex" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="sunday-tab" data-toggle="tab" href="#nav-sunday" role="tab"
                                aria-controls="sunday" aria-selected="true">Minggu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="monday-tab" data-toggle="tab" href="#nav-monday" role="tab"
                                aria-controls="monday" aria-selected="false">Senin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#nav-tuesday" role="tab"
                                aria-controls="tuesday" aria-selected="false">Selasa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#nav-wednesday" role="tab"
                                aria-controls="wednesday" aria-selected="false">Rabu</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#nav-thursday" role="tab"
                                aria-controls="thursday" aria-selected="false">Kamis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="friday-tab" data-toggle="tab" href="#nav-friday" role="tab"
                                aria-controls="friday" aria-selected="false">Jumat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="saturday-tab" data-toggle="tab" href="#nav-saturday" role="tab"
                                aria-controls="saturday" aria-selected="false">Sabtu</a>
                        </li>
                    </ul>
                </div>
            </div>



            <div class="tab-content">

                {{-- Jadwal Hari Minggu --}}
                <div class="tab-pane fade show active" id="nav-sunday" role="tabpanel" aria-labelledby="nav-sunday-tab">
                    @if ($jadwal->count() > 0)
                        <div class="row">
                            @foreach ($jadwal->where('kategori', 'minggu') as $data)
                                <div class="col-lg-6">
                                    <div class="class-item d-flex align-items-center">
                                        {{-- Untuk menampilkan gambar yang di isi di crud --}}
                                        <a href="single.html" class="class-item-thumbnail">
                                            <img src="{{ asset('storage/posts/' . $data->image) }}"
                                                style="height: 7rem; width: 25rem; object-fit:cover; border-radius: 0.25rem"
                                                alt="Image">
                                        </a>
                                        <div class="class-item-text">
                                            {{-- Untuk menampilkan jam yang diisi di crud --}}
                                            <span>{{ $data->kategori }} . {{ $data->jam }}</span>
                                            {{-- Untuk menampilkan nama kelas yang diisi di crud --}}
                                            <h2>{{ optional($data->kelas)->nama_kelas }}</h2>
                                            {{-- Untuk menampilkan nama pelatih yang diisi di crud --}}
                                            <span> By {{ optional($data->pelatih)->nama_pelatih }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <h2 class="mb-5 text-center">Tidak ada jadwal kelas hari ini.</h2>
                    @endif

                </div>

                {{-- Jadwal Hari Senin --}}
                <div class="tab-pane fade" id="nav-monday" role="tabpanel" aria-labelledby="nav-monday-tab">
                    @if ($jadwal->count() > 0)
                        <div class="row">
                            @foreach ($jadwal->where('kategori', 'senin') as $data)
                                <div class="col-lg-6">
                                    <div class="class-item d-flex align-items-center">
                                        {{-- Untuk menampilkan gambar yang diisi di crud --}}
                                        <a href="single.html" class="class-item-thumbnail">
                                            <img src="{{ asset('storage/posts/' . $data->image) }}"
                                                style="height: 7rem; width: 25rem; object-fit:cover; border-radius: 0.25rem"
                                                alt="Image">
                                        </a>
                                        <div class="class-item-text">
                                            {{-- Untuk menampilkan jam yang diisi di crud --}}
                                            <span>{{ $data->kategori }} . {{ $data->jam }}</span>
                                            {{-- Untuk menampilkan nama kelas yang diisi di crud --}}
                                            <h2>{{ optional($data->kelas)->nama_kelas }}</h2>
                                            {{-- Untuk menampilkan nama pelatih yang diisi di crud --}}
                                            <span> By {{ optional($data->pelatih)->nama_pelatih }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <h2 class="mb-5 text-center">Tidak ada jadwal kelas hari ini.</h2>
                    @endif
                </div>

                {{-- Jadwal Hari Selasa --}}
                <div class="tab-pane fade" id="nav-tuesday" role="tabpanel" aria-labelledby="nav-tuesday-tab">
                    @if ($jadwal->count() > 0)
                    <div class="row">
                        @foreach ($jadwal->where('kategori', 'selasa') as $data)
                            <div class="col-lg-6">
                                <div class="class-item d-flex align-items-center">
                                    {{-- Untuk menampilkan gambar yang diisi di crud --}}
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="{{ asset('storage/posts/' . $data->image) }}"
                                            style="height: 7rem; width: 25rem; object-fit:cover; border-radius: 0.25rem"
                                            alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        {{-- Untuk menampilkan jam yang diisi di crud --}}
                                        <span>{{ $data->kategori }} . {{ $data->jam }}</span>
                                        {{-- Untuk menampilkan nama kelas yang diisi di crud --}}
                                        <h2>{{ optional($data->kelas)->nama_kelas }}</h2>
                                        {{-- Untuk menampilkan nama pelatih yang diisi di crud --}}
                                        <span> By {{ optional($data->pelatih)->nama_pelatih }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @else
                        <h2 class="mb-5 text-center">Tidak ada jadwal hari ini.</h2>
                    @endif

                </div>

                {{-- Jadwal Hari Rabu --}}
                <div class="tab-pane fade" id="nav-wednesday" role="tabpanel" aria-labelledby="nav-wednesday-tab">
                    
                    <div class="row">
                        @foreach ($jadwal->where('kategori', 'rabu') as $data)
                            <div class="col-lg-6">
                                <div class="class-item d-flex align-items-center">
                                    {{-- Untuk menampilkan gambar yang diisi di crud --}}
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="{{ asset('storage/posts/' . $data->image) }}"
                                            style="height: 7rem; width: 25rem; object-fit:cover; border-radius: 0.25rem"
                                            alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        {{-- Untuk menampilkan jam yang diisi di crud --}}
                                        <span>{{ $data->kategori }} . {{ $data->jam }}</span>
                                        {{-- Untuk menampilkan nama kelas yang diisi di crud --}}
                                        <h2>{{ optional($data->kelas)->nama_kelas }}</h2>
                                        {{-- Untuk menampilkan nama pelatih yang diisi di crud --}}
                                        <span> By {{ optional($data->pelatih)->nama_pelatih }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Jadwal Hari Kamis --}}
                <div class="tab-pane fade" id="nav-thursday" role="tabpanel" aria-labelledby="nav-thursday-tab">
                    <div class="row">
                        @foreach ($jadwal->where('kategori', 'kamis') as $data)
                            <div class="col-lg-6">
                                <div class="class-item d-flex align-items-center">
                                    {{-- Untuk menampilkan gambar yang diisi di crud --}}
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="{{ asset('storage/posts/' . $data->image) }}"
                                            style="height: 7rem; width: 25rem; object-fit:cover; border-radius: 0.25rem"
                                            alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        {{-- Untuk menampilkan jam yang diisi di crud --}}
                                        <span>{{ $data->kategori }} . {{ $data->jam }}</span>
                                        {{-- Untuk menampilkan nama kelas yang diisi di crud --}}
                                        <h2>{{ optional($data->kelas)->nama_kelas }}</h2>
                                        {{-- Untuk menampilkan nama pelatih yang diisi di crud --}}
                                        <span> By {{ optional($data->pelatih)->nama_pelatih }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Jadwal Hari Jumat --}}
                <div class="tab-pane fade" id="nav-friday" role="tabpanel" aria-labelledby="nav-friday-tab">
                    <div class="row">
                        @foreach ($jadwal->where('kategori', 'jumat') as $data)
                            <div class="col-lg-6">
                                <div class="class-item d-flex align-items-center">
                                    {{-- Untuk menampilkan gambar yang diisi di crud --}}
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="{{ asset('storage/posts/' . $data->image) }}"
                                            style="height: 7rem; width: 25rem; object-fit:cover; border-radius: 0.25rem"
                                            alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        {{-- Untuk menampilkan jam yang diisi di crud --}}
                                        <span>{{ $data->kategori }} . {{ $data->jam }}</span>
                                        {{-- Untuk menampilkan nama kelas yang diisi di crud --}}
                                        <h2>{{ optional($data->kelas)->nama_kelas }}</h2>
                                        {{-- Untuk menampilkan nama pelatih yang diisi di crud --}}
                                        <span> By {{ optional($data->pelatih)->nama_pelatih }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Jadwal Hari Sabtu --}}
                <div class="tab-pane fade" id="nav-saturday" role="tabpanel" aria-labelledby="nav-saturday-tab">
                    <div class="row">
                        @foreach ($jadwal->where('kategori', 'sabtu') as $data)
                            <div class="col-lg-6">
                                <div class="class-item d-flex align-items-center">
                                    {{-- Untuk menampilkan gambar yang diisi di crud --}}
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="{{ asset('storage/posts/' . $data->image) }}"
                                            style="height: 7rem; width: 25rem; object-fit:cover; border-radius: 0.25rem"
                                            alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        {{-- Untuk menampilkan jam yang diisi di crud --}}
                                        <span>{{ $data->kategori }} . {{ $data->jam }}</span>
                                        {{-- Untuk menampilkan nama kelas yang diisi di crud --}}
                                        <h2>{{ optional($data->kelas)->nama_kelas }}</h2>
                                        {{-- Untuk menampilkan nama pelatih yang diisi di crud --}}
                                        <span> By {{ optional($data->pelatih)->nama_pelatih }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

@endsection
