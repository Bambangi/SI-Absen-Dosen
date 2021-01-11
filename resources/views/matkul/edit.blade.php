@extends('master')
@section('title', 'edit-dosen')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card shadow" style="margin-top: 120px;">
                <div class="card-body">
                    <h2>Edit Matkul</h2>
                    <hr class="lead">

                    <form action="/matkul/update/{{ $matkul->ID }}" method="post" class="form-group">
                    @csrf
                        <label for="KODE_MK" class="mt-2">Kode MK :</label>
                        <input name="KODE_MK" type="text" value="{{ $matkul->KODE_MK }}" class="form-control" placeholder="masukkan kode mk" autocomplete="off">
                        <label for="NAMA" class="mt-2">Nama :</label>
                        <input name="NAMA" type="text" value="{{ $matkul->NAMA }}" class="form-control" placeholder="masukkan nama matkul" autocomplete="off">
                        <a href="/matkul" class="btn btn-primary mt-4">Back</a>
                        <button class="btn btn-info mt-4" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection