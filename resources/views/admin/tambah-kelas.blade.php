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
                            <input type="number" class="form-control" id="nama_pelatih" name="durasi" value=""
                                placeholder="Masukkan durasi kelas">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
    </form>
@endsection
