@extends('master')
@section('title', 'edit-matkul')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card shadow" style="margin-top: 120px; margin-bottom: 120px;">
                <div class="card-body">
                    <h2>Edit Laporan</h2>
                    <hr class="lead">

                    <form action="/report/update/{{ $laporan->ID }}" method="post" class="form-group">
                    @csrf
                        
                        <label for="PRODI">Prodi :</label>
                        <select name="PRODI" id="PRODI" class="form-control">
                        <option>-- Pilih prodi --</option>
                            @foreach( $prodi as $p )
                                @if ( $laporan->PRODI == $p->ID )
                                    <option value="{{ $p->ID }}" selected>{{ $p->NAMA }}</option>
                                @else
                                    <option value="{{ $p->ID }}">{{ $p->NAMA }}</option>
                                @endif
                            @endforeach
                        </select>
                        
                        <label for="SEMESTER" class="mt-2">Semester :</label>
                        <select name="SEMESTER" id="SEMESTER" class="form-control">
                            
                            <option value="{{ $laporan->SEMESTER }}" selected>Semester ke - {{ $laporan->SEMESTER }}</option>
                            <option>-- Pilih semester --</option>
                            @for( $i = 1; $i < 9; $i++ )   
                                <option value="{{ $i }}">Semester ke - {{ $i }}</option>
                            @endfor
                        </select>
                        
                        <label for="PERTEMUAN" class="mt-2">Pertemuan :</label>
                        <select name="PERTEMUAN" id="PERTEMUAN" class="form-control">
                            
                        <option>-- Pilih pertemuan --</option>
                            <option value="{{ $laporan->PERTEMUAN }}" selected>Pertemuan ke - {{ $laporan->PERTEMUAN }}</option>
                            @for( $i = 1; $i < 29; $i++ )
                                <option value="{{ $i }}">Pertemuan ke - {{ $i }}</option>
                            @endfor
                        </select>

                        <label for="TGL" class="mt-2">Tgl :</label>
                        <input type="date" name="TGL" id="TGL" class="form-control" value="{{ $laporan->TGL }}">

                        <label for="JAM" class="mt-2">Jam :</label>
                        <input type="time" name="JAM" id="JAM" class="form-control" value="{{ $laporan->JAM }}">

                        <label for="MATKUL" class="mt-2">Mata kuliah :</label>
                        <select name="MATKUL" id="MATKUL" class="form-control">
                        <option>-- Pilih matkul --</option>
                            @foreach( $matkul as $m )
                                @if ( $laporan->MATKUL == $m->ID )
                                    <option value="{{ $m->ID }}" selected>{{ $m->KODE_MK }} - {{ $m->NAMA }}</option>
                                @else
                                    <option value="{{ $m->ID }}">{{ $m->KODE_MK }} - {{ $m->NAMA }}</option>
                                @endif
                            @endforeach
                        </select>

                        <label for="DOSEN" class="mt-2">Dosen :</label>
                        <select name="DOSEN" id="DOSEN" class="form-control">
                        <option>-- Pilih dosen --</option>
                            @foreach( $dosen as $d )
                                @if ( $laporan->DOSEN == $d->ID )
                                    <option value="{{ $d->ID }}" selected>{{ $d->NIP }} - {{ $d->NAMA }}</option>
                                @else
                                    <option value="{{ $d->ID }}">{{ $d->NIP }} - {{ $d->NAMA }}</option>
                                @endif
                            @endforeach
                        </select>

                        <label for="PEMBAHASAN" class="mt-2">Pembahasan :</label>
                        <textarea type="text" name="PEMBAHASAN" id="PEMBAHASAN" rows="5" class="form-control">{{ old('PEMBAHASAN', $laporan->PEMBAHASAN) }}</textarea>

                        <a href="/report" class="btn btn-primary mt-4">Back</a>
                        <button class="btn btn-info mt-4" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection