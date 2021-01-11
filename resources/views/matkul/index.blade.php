@extends('master')
@section('title', 'Mata kuliah')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card shadow" style="margin: 120px 0 120px 0;">
                <div class="card-body">
                <h2>Daftar Matkul</h2>
                <hr class="lead">
                
                <a href="/matkul/create" class="btn btn-success mb-5"><i class="fa fa-plus"></i> Tambah Data</a>
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
                            <th scope="col">Kode MK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tindakan</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach( $matkul as $mk )
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $mk->KODE_MK }}</td>
                            <td>{{ $mk->NAMA }}</td>
                            <td>
                                <a href="/matkul/edit/{{ $mk->ID }}" class="btn text-white btn-warning">Edit</a>
                                <a href="/matkul/delete/{{ $mk->ID }}" onclick="return confirm('Yakin mau hapus data?');" class="btn btn-danger">Delete</a>
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