@extends('layouts.app')

@section('title', 'Halaman masuk akun')

@section('content')
<div class="container">
  <div class="d-flex justify-content-center align-items-center auth-height">
    <div class="col-xl-4 col-lg-5 col-md-6">
      <div class="card shadow-sm border border-1">
        <div class="card-body">
          <form action="{{ route('login.store') }}" method="POST" enctype="multipart/form-data">
              @csrf

            <div class="py-2 px-4">
              <h1 class="card-title text-center mt-3">Masuk ke akun Anda</h1>
              <div class="mt-4 mb-3">
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Masukkan email">
              </div>
              <div class="mb-3">
                <input type="password" name="password" class="form-control" id="inputPassword"
                  placeholder="Masukkan password">
              </div>
              <div class="mb-3">
                <a class="text-muted text-left forgot-pw" href="/register">Belum punya akun?</a>
              </div>

              <div class="mb-3">
                  <button class="button-primary d-none d-md-block py-2 px-4 rounded-4 text-center justify-content-center" type="submit">Login</button>

              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
