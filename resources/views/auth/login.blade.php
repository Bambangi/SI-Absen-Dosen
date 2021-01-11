@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 220px;">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card shadow border-light">
                <h4 class="text-center pt-3">Login</h4>

                <div class="card-body">
                    <form class="form-group" method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- EMAIL LOGIN -->
                        <label for="email">Email :</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="masukkan email">
                        <!-- VERIFIKASI -->
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                        

                        <!-- PASSWORD LOGIN -->
                        <label for="password" class="pt-3">Password :</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="masukkan password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        
                        <!-- REMEMBER ME -->
                        <div class="form-check pt-2">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>

                            
                        <button type="submit" class="btn btn-primary mt-3">Login</button>

                        @if (Route::has('password.request'))
                            <a class="btn text-white btn-warning mt-3" href="{{ route('password.request') }}">Lupa Password</a>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
