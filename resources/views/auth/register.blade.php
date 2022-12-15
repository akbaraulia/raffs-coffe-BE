@extends('layouts.app')

@section('title', 'Halaman buat akun')

@section('content')
<div class="container">
   <div class="d-flex justify-content-center align-items-center auth-height">
      <div class="col-xl-4 col-lg-5 col-md-6">
         <div class="card  shadow-sm border border-1">
            <div class="card-body">
               <div class="py-2 px-4">
                  <h1 class="card-title text-center mt-3">Buat akun baru</h1>
                  <div class="mt-4 mb-3">
                     <input type="text" name="name" class="form-control" id="inputName" placeholder="Masukkan nama">
                  </div>
                  <div class="mb-3">
                     <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Masukkan email">
                  </div>
                  <div class="mb-3">
                     <input type="password" name="password" class="form-control" id="inputPassword"
                        placeholder="Masukkan password">
                  </div>
                  <div class="mb-3">
                     <input type="password" name="password_confirmation" class="form-control"
                        id="inputPasswordConfirmation" placeholder="Konfirmasi password">
                  </div>
                  <div class="mb-3">
                     <a class="text-muted text-left forgot-pw" href="/login">Sudah punya akun?</a>
                  </div>

                  <div class="mb-3">
                     <a href="#"
                        class="button-primary d-none d-md-block py-2 px-4 rounded-4 text-center justify-content-center">Daftar</a>

                     <a href="#"
                        class="button-primary d-sm-block d-md-none py-2 px-4 rounded-4 text-center d-flex justify-content-center">Daftar</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection