@extends('admin.layout.main')

@section('title', 'Form Edit jadwal')

@section('contents')
    <form action="{{ '/edit-jadwal/' . $jadwal->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">

                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_kelas">Nama Kelas</label>
                            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas"
                                value="{{ $jadwal->nama_kelas }}" placeholder="Masukkan nama kelas">
                        </div>
                        <div class="form-group">
                            <label for="nama_pelatih">Nama Pelatih</label>
                            <input type="text" class="form-control" id="nama_pelatih" name="nama_pelatih"
                                value="{{ $jadwal->nama_pelatih }}" placeholder="Masukkan nama pelatih">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Hari</label>
                            <input type="text" class="form-control" id="kategori" name="kategori"
                                value="{{ $jadwal->kategori }}" placeholder="Masukkan hari">
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <input type="time" class="form-control" id="jam" name="jam"
                                value="{{ $jadwal->jam }}" placeholder="Masukkan jam (format: HH:MM)">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
