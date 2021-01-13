@extends('master')
@section('title', 'daftar-laporan')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card shadow" style="margin: 120px 0 120px 0;">
                <div class="card-body">
                <h2>Daftar Absensi</h2>
                <hr class="lead">
                
                <a href="/report/create" class="btn btn-success mb-5"><i class="fa fa-plus"></i> Tambah Data</a>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari data..">
                    <div class="input-group-append">
                        <button class="btn btn-info" type="submit">Search</button>
                    </div>
                </div>
                <table class="table table-striped table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Prodi</th>
                            <th>Semester</th>
                            <th>Pertemuan</th>
                            <th>Tgl</th>
                            <th>Jam</th>
                            <th>Matkul</th>
                            <th>Dosen</th>
                            <th>Pembahasan</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $laporan as $l )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                            @foreach ($prodi as $p)
                                @if($l->PRODI == $p->ID)
                                {{ $p->NAMA}}
                                @endif
                            @endforeach
                            </td>
                            <td>{{ $l->SEMESTER }}</td>
                            <td>{{ $l->PERTEMUAN }}</td>
                            <td>{{ $l->TGL }}</td>
                            <td>{{ $l->JAM }}</td>
                            <td>{{ $l->matkul->KODE_MK }} - {{ $l->matkul->NAMA }}</td>
                            <td>{{ $l->dosen->NAMA }}</td>
                            <td>{{ $l->PEMBAHASAN }}</td>
                            <td>
                                <a href="/report/edit/{{ $l->ID }}" class="btn text-white btn-warning">Edit</a>
                                <a href="/report/delete/{{ $l->ID }}" onclick="return confirm('Yakin mau hapus data?');" class="btn btn-danger">Delete</a>
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
