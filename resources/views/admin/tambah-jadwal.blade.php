@extends('admin.layout.main')

@section('title', 'Form Jadwal')

@section('contents')
    <form action="/tambah-jadwal" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">

                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <label for="nam_kelas">Nama Kelas</label>
                            <select name="nam_kelas" id="nam_kelas" class="custom-select">
                                <option value="" selected disabled hidden>-- Pilih Nama Pelatih--</option>
                                @foreach ($kelas as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nam_pelatih">Nama Pelatih</label>
                            <select name="nam_pelatih" id="nam_pelatih" class="custom-select">
                                <option value="" selected disabled hidden>-- Pilih Nama Pelatih--</option>
                                @foreach ($pelatih as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_pelatih }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="harga">Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <input type="time" class="form-control" id="jam" name="jam" value=""
                                placeholder="Masukkan jam (format: HH:MM)">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Hari</label>
                            <select class="form-select form-control" aria-label="Default select example" id="kategori" name="kategori">
                                <option selected hidden>--- Pilih hari---</option>
                                <option value="senin">Senin</option>
                                <option value="selasa">Selasa</option>
                                <option value="rabu">Rabu</option>
                                <option value="kamis">Kamis</option>
                                <option value="jumat">Jumat</option>
                                <option value="sabtu">Sabtu</option>
                                <option value="minggu">Minggu</option>
                              </select>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
