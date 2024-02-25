@extends('admin.layout.main')

@section('title', 'Form Edit Pelatih')

@section('contents')
    <form action="{{ '/edit-pelatih/' . $pelatih->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Pelatih</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_pelatih">Nama Pelatih</label>
                            <input type="text" class="form-control" id="nama_kelas" name="nama_pelatih"
                                value="{{ $pelatih->nama_pelatih }}" placeholder="Masukkan nama pelatih">
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" value=""
                                placeholder="Masukkan deskripsi singkat kelas" cols="20" rows="5">{{$pelatih->deskripsi}}</textarea>
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
