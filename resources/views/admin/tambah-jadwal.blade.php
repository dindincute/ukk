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
                            <label for="nama_kelas">Nama Kelas</label>
                            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value=""
                                placeholder="Masukkan nama kelas">
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Nama Pelatih</label>
                            <input type="text" class="form-control" id="nama_pelatih" name="nama_pelatih" value=""
                                placeholder="Masukkan nama pelatih">
                        </div>
                        <div class="form-group">
                            <label for="harga">Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Durasi Kelas </label>
                            <input type="number" class="form-control" id="nama_barang" name="durasi_kelas" value=""
                                placeholder="Masukkan durasi kelas">
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <input type="time" class="form-control" id="jam" name="jam" value=""
                                placeholder="Masukkan jam (format: HH:MM)">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Hari</label>
                            <select class="form-select" aria-label="Default select example" id="kategori" name="kategori">
                                <option selected hidden>Pilih hari</option>
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
