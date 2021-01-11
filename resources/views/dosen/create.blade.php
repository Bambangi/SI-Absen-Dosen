@extends('master')
@section('title', 'create-dosen')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card shadow"  style="margin-top: 120px;">
                <div class="card-body">
                    <h2>Tambah Dosen</h2>
                    <hr class="lead">
                    <form action="/dosen/store" method="post" class="form-group">
                    @csrf
                        <label for="NIP" class="mt-md-2">NIP Dosen :</label>
                        <input name="NIP" type="number" class="form-control" placeholder="masukkan nip 18 digit" autocomplete="off" required>
                        <label for="NAMA" class="mt-md-2">Nama :</label>
                        <input name="NAMA" type="text" class="form-control" placeholder="masukkan nama dosen" autocomplete="off" required>
                        <a href="/dosen" class="btn btn-primary mt-4">Back</a>
                        <button class="btn btn-info mt-4" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection