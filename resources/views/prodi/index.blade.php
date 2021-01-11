@extends('master')
@section('title', 'Prodi')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card shadow" style="margin: 120px 0 120px 0;">
                <div class="card-body">
                <h2>Daftar Prodi</h2>
                <hr class="lead">
                
                <a href="/prodi/create" class="btn btn-success mb-5"><i class="fa fa-plus"></i> Tambah Data</a>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari data..">
                    <div class="input-group-append">
                        <button class="btn btn-info" type="submit">Search</button>
                    </div>
                </div>
                <table class="table table-striped table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tindakan</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach( $prodi as $p )
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $p->NAMA }}</td>
                            <td>
                                <a href="/prodi/edit/{{ $p->ID }}" class="btn text-white btn-warning">Edit</a>
                                <a href="/prodi/delete/{{ $p->ID }}" onclick="return confirm('Yakin mau hapus data?');" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection