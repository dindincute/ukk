@extends('admin.layout.main')

@section('title', 'Data Kelas')

@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kelas</h6>
        </div>
        <div class="card-body">
            <a href="/tambah-kelas" class="btn btn-primary mb-3">Tambah Kelas</a>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        @if ($kelas->count() > 0)
                            <tr>
                                <th>No</th>
                                <th>Nama Kelas</th>
                                <th>Nama Pelatih</th>
                                <th>Durasi</th>
                                <th>Manfaat</th>
                                <th>Deskripsi</th>
                                <th>Image</th>
                                <th>Aksi</th>
                            </tr>
                        @else
                            <h2 class="m-0 text-center">Data kosong</h2>
                        @endif
                    </thead>
                    <tbody>
                        @foreach ($kelas as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nama_kelas }}</td>
                            <td>{{ optional($data->pelatih)->nama_pelatih }}</td>
                            <td>{{ $data->durasi }}</td>
                            <td>{{ $data->manfaat }}</td>
                            <td>{{ $data->deskripsi }}</td>

                            <td>
                                <img src="{{ asset('/storage/posts/' . $data->image) }}" width="100">
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ '/edit-kelas/' . $data->id }}" class="btn btn-info btn-circle mr-2">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                    <form action="{{ '/kelas/' . $data->id }}" method="POST" class="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-info btn-circle icon btn-danger" data-confirm-delete="true">
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
