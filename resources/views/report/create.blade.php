@extends('master')
@section('title', 'create-laporan')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card shadow"  style="margin-top: 120px; margin-bottom: 120px;">
                <div class="card-body">
                    <h2>Tambah Laporan</h2>
                    <hr class="lead">
                    <form action="/report/store" method="post" class="form-group">
                    @csrf
                        <label for="PRODI">Prodi :</label>
                        <select name="PRODI" id="PRODI" class="form-control">
                        <option>-- Pilih prodi --</option>
                            @foreach( $prodi as $p )
                                <option value="{{ $p->ID }}">{{ $p->NAMA }}</option>
                            @endforeach
                        </select>
                        
                        <label for="SEMESTER" class="mt-2">Semester :</label>
                        <select name="SEMESTER" id="SEMESTER" class="form-control">
                            <option>-- Pilih semester --</option>
                            @for( $i = 1; $i < 9; $i++ )
                                <option value="{{ $i }}">Semester ke - {{ $i }}</option>
                            @endfor
                        </select>
                        
                        <label for="PERTEMUAN" class="mt-2">Pertemuan :</label>
                        <select name="PERTEMUAN" id="PERTEMUAN" class="form-control">
                            <option>-- Pilih pertemuan --</option>
                            @for( $i = 1; $i < 29; $i++ )
                                <option value="{{ $i }}">Pertemuan ke - {{ $i }}</option>
                            @endfor
                        </select>

                        <label for="TGL" class="mt-2">Tgl :</label>
                        <input type="date" name="TGL" id="TGL" class="form-control">

                        <label for="JAM" class="mt-2">Jam :</label>
                        <input type="time" name="JAM" id="JAM" class="form-control">

                        <label for="MATKUL" class="mt-2">Mata kuliah :</label>
                        <select name="MATKUL" id="MATKUL" class="form-control">
                            <option>-- Pilih matkul --</option>
                            @foreach( $matkul as $m )
                                <option value="{{ $m->ID }}">{{ $m->KODE_MK }} - {{ $m->NAMA }}</option>
                            @endforeach
                        </select>

                        <label for="DOSEN" class="mt-2">Dosen :</label>
                        <select name="DOSEN" id="DOSEN" class="form-control">
                        <option>-- Pilih dosen --</option>
                            @foreach( $dosen as $d )
                                <option value="{{ $d->ID }}">{{ $d->NIP }} - {{ $d->NAMA }}</option>
                            @endforeach
                        </select>

                        <label for="PEMBAHASAN" class="mt-2">Pembahasan :</label>
                        <textarea type="text" name="PEMBAHASAN" id="PEMBAHASAN" rows="5" class="form-control"></textarea>

                        <a href="/report" class="btn btn-primary mt-4">Back</a>
                        <button class="btn btn-info mt-4" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection