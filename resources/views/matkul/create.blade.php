@extends('master')
@section('title', 'create-matkul')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card shadow"  style="margin-top: 120px;">
                <div class="card-body">
                    <h2>Tambah Matkul</h2>
                    <hr class="lead">
                    <form action="/matkul/store" method="post" class="form-group">
                    @csrf
                        <label for="KODE_MK" class="mt-2">Kode MK :</label>
                        <input name="KODE_MK" type="text" class="form-control" placeholder="masukkan kode mk 6 digit" autocomplete="off" required>
                        <label for="NAMA" class="mt-2">Nama :</label>
                        <input name="NAMA" type="text" class="form-control" placeholder="masukkan nama matkul" autocomplete="off" required>
                        <a href="/matkul" class="btn btn-primary mt-4">Back</a>
                        <button class="btn btn-info mt-4" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection