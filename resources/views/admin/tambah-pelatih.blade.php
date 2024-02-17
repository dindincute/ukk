@extends('admin.layout.main')

@section('title', 'Form Tambah Pelatih')

@section('contents')
    <form action="/tambah-pelatih" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">

                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_kelas">Nama Pelatih</label>
                            <input type="text" class="form-control" id="nama_kelas" name="nama_pelatih" value=""
                                placeholder="Masukkan nama pelatih">
                        </div>

                        <div class="form-group">
                            <label for="nama_barang">Deskripsi</label>
                            <input type="text" class="form-control" id="nama_pelatih" name="deskripsi" value=""
                                placeholder="Masukkan deskripsi pelatih">
                        </div>

                        <div class="form-group">
                            <label for="harga">Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
    </form>
@endsection
