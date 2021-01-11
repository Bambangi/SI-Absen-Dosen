@extends('master')
@section('title', 'create-prodi')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card shadow"  style="margin-top: 120px;">
                <div class="card-body">
                    <h2>Tambah Prodi</h2>
                    <hr class="lead">
                    <form action="/prodi/store" method="post" class="form-group">
                    @csrf
                        <label for="NAMA" class="mt-2">Nama :</label>
                        <input name="NAMA" type="text" class="form-control" placeholder="masukkan nama prodi" autocomplete="off" required>
                        <a href="/prodi" class="btn btn-primary mt-4">Back</a>
                        <button class="btn btn-info mt-4" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection