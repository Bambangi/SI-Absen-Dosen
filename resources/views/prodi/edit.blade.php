@extends('master')
@section('title', 'edit-matkul')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card shadow" style="margin-top: 120px;">
                <div class="card-body">
                    <h2>Edit Prodi</h2>
                    <hr class="lead">

                    <form action="/prodi/update/{{ $prodi->ID }}" method="post" class="form-group">
                    @csrf
                        <label for="NAMA" class="mt-2">Nama :</label>
                        <input name="NAMA" type="text" value="{{ $prodi->NAMA }}" class="form-control" placeholder="masukkan nama prodi" autocomplete="off">

                        <a href="/prodi" class="btn btn-primary mt-4">Back</a>
                        <button class="btn btn-info mt-4" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection