@extends('admin.layout.main')

@section('title', 'Data pelatih')

@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pelatih</h6>
        </div>
        <div class="card-body">
            <a href="/tambah-pelatih" class="btn btn-primary mb-3">Tambah Pelatih</a>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        @if ($pelatih->count() > 0)
                            <tr>
                                <th>No</th>
                                <th>Nama Pelatih</th>
                                <th>Deskripsi</th>
                                <th>Image</th>
                                <th>Aksi</th>
                            </tr>
                        @else
                            <h2 class="m-0 text-center">Data kosong</h2>
                        @endif
                    </thead>
                    <tbody>
                        @foreach ($pelatih as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_pelatih }}</td>
                                <td>{{ $data->deskripsi }}</td>
                                <td>
                                    <img src="{{ asset('/storage/posts/' . $data->image) }}" width="100">
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ '/edit-pelatih/' . $data->id }}" class="btn btn-info btn-circle mr-2">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                        <form action="{{ '/pelatih-kelas/' . $data->id }}" method="POST" class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-info btn-circle icon btn-danger"
                                                data-confirm-delete="true">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
