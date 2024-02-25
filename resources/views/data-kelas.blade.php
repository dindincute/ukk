@extends('layout.main')


@section('classes')
    <div class="site-sectio" id="classes-section">
        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <img src="{{ asset('storage/posts/' . $kelas->image)}}" alt="Image" class="img-fluid w-25">
                    </div>
                </div>
                <div class="row mb-5">
                    {{--- deskripsi --}}
                    <div class="col-lg-6">
                        <p class="text-black ">{{ $kelas->deskripsi}}</p>
                    </div>
                    {{-- manfaat --}}
                    <div class="col-lg-6">
                        <p class="text-black ">{{ $kelas->manfaat}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
