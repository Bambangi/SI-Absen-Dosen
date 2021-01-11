@extends('master')
@section('title', 'edit-dosen')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card shadow" style="margin-top: 120px;">
                <div class="card-body">
                    <h2>Edit Dosen</h2>
                    <hr class="lead">

                    <form action="/dosen/update/{{ $dosen->ID }}" method="post" class="form-group">
                    @csrf
                        <label for="NIP" class="mt-2">NIP Dosen :</label>
                        <input name="NIP" type="number" value="{{ $dosen->NIP }}" class="form-control" placeholder="masukkan nip 18 digit" autocomplete="off">
                    
                        <label for="NAMA" class="mt-2">Nama :</label>
                        <input name="NAMA" type="text" value="{{ $dosen->NAMA }}" class="form-control" placeholder="masukkan nama dosen" autocomplete="off">

                        <a href="/dosen" class="btn btn-primary mt-4">Back</a>
                        <button class="btn btn-info mt-4" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection