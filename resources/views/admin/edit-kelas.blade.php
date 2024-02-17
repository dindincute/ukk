@extends('admin.layout.main')

@section('title', 'Form Edit Kelas')

@section('contents')
    <form action="{{ '/edit-kelas/' . $kelas->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Kelas</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_kelas">Nama Kelas</label>
                            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas"
                                value="{{ $kelas->nama_kelas }}" placeholder="Masukkan nama kelas">
                        </div>

                        <div class="form-group">
                            <label for="nama_pelatih">Nama Pelatih</label>
                            <input type="text" class="form-control" id="nama_pelatih" name="nama_pelatih"
                                value="{{ $kelas->nama_pelatih }}" placeholder="Masukkan nama pelatih">
                        </div>

                        <div class="form-group">
                            <label for="durasi">Durasi Kelas </label>
                            <input type="text" class="form-control" id="durasi" name="durasi"
                                value="{{ $kelas->durasi }}" placeholder="Masukkan durasi kelas">
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
