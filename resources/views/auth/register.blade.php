@extends('layouts.app')
@section('title', 'Register Page')

@section('content')
    <h2 class="text-center pt-3">Account Register</h2>
    <hr class="my-2">

    {{-- Note: memang tidak bisa daftar karena gak pake db :D --}}
    <form class="container-fluid p-3" action="" method="dialog">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="nama" class="form-control" id="nama" name="nama" value="Zainul Muhaimin">
        </div>
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
            <button type="button" class="btn btn-secondary text-white w-25 rounded-5 me-2" data-bs-toggle="modal"
                data-bs-target="#modalPopup">
                <span>Daftar</span>
            </button>
            <p class="pt-2">
                Sudah punya akun? <a href="/login">Masuk</a>
            </p>
        </div>
    </form>

    <div class="modal fade" id="modalPopup" tabindex="-1" aria-labelledby="modalPopup" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPopupLabel">No Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Maaf, fitur register tidak dapat digunakan karena tidak ada database yang terhubung. :D</p>
                    <p><a href="/login">Login</a> dengan default value untuk mengakses hompage.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endsection
