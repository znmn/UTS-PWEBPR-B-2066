@extends('layouts.app')
@section('title', 'Login Page')

@section('content')
    <h2 class="text-center pt-3">Account Login</h2>
    <hr class="my-2">
    @if (session('error'))
        <div class="alert alert-danger mx-3 my-1" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <form class="container-fluid p-3" action="{{ url('/login') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" class="form-control" id="email" name="email" value="zain@email.test">
            <div id="emailHelp" class="form-text">Silahkan masukkan alamat email anda.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Kata Sandi</label>
            <input type="password" class="form-control" id="password" name="password" value="password">
        </div>
        <div class="text-center pt-3">
            <button type="submit" class="btn btn-secondary text-white w-25 rounded-5 me-2">
                <span>Masuk</span>
            </button>
            <p class="pt-2">
                Belum punya akun? <a href="/register">Daftar</a>
            </p>
        </div>
    </form>
@endsection
