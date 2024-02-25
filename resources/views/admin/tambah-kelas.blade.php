@extends('admin.layout.main')

@section('title', 'Form Kelas')

@section('contents')
    <form action="/tambah-kelas" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">

                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_kelas">Nama Kelas</label>
                            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="{{ old('nama_kelas') }}"
                                placeholder="Masukkan nama kelas">
                        </div>

                        <div class="form-group">
                            <label for="nama_pelatih">Nama Pelatih</label>
                            <select name="id_pelatihs" id="id_pelatih" class="custom-select">
                                <option value="{{ old('id_pelatihs') }}" selected disabled hidden>--Nama Pelatih--</option>
                                @foreach ($kelas as $data)
                                    <option value="{{ $data->id }}"
                                        {{ isset($kelas) ? ($kelas->id_pelatihs == $data>id ? 'selected' : '') : '' }}>
                                        {{ $data->nama_pelatih }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>

                        <div class="form-group">
                            <label for="durasi_kelas">Durasi Kelas </label>
                            <input type="number" class="form-control" id="nama_pelatih" name="durasi" value="{{ old('durasi') }}"
                                placeholder="Masukkan durasi kelas dalam satuan menit">
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukkan deskripsi singkat kelas"
                                cols="20" rows="5">{{ old('deskripsi') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="nama_barang">Manfaat</label>
                            <textarea class="form-control" name="manfaat" id="manfaat" placeholder="Masukkan manfaat kelas" cols="20"
                                rows="5">{{ old('manfaat') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
    </form>
@endsection
