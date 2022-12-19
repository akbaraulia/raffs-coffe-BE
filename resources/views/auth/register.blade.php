{{-- @extends('layouts.app')

@section('title', 'Halaman buat akun')

@section('content')
<div class="container">
   <div class="d-flex justify-content-center align-items-center auth-height">
      <div class="col-xl-4 col-lg-5 col-md-6">
         <div class="card  shadow-sm border border-1">
            <div class="card-body">
               <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
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
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Buat Akun Baru</title>
   @include('includes.styles')
</head>

<body class="overflow-hidden" style="padding-top: 0;">
   <div class="container">
      <div class="row vh-100 d-flex justify-content-center align-items-center">
         <form class="col-xl-6 col-md-8 col-10 form-auth">
            <h1 class="auth-title mb-lg-5 mb-4">Buat Akun Baru</h1>
            <div class="mb-4">
               <input type="text" class="form-input col-lg-12 col-12" placeholder="Masukkan nama">
            </div>
            <div class="mb-4">
               <input type="email" class="form-input col-lg-12 col-12" placeholder="Masukkan email">
            </div>
            <div class=" mb-4">
               <input type="password" class="form-input col-lg-12 col-12" placeholder="Masukkan password">
            </div>
            <div class=" mb-3">
               <input type="password" class="form-input col-lg-12 col-12" placeholder="Konfirmasi password">
            </div>
            <div class=" mb-4">
               <a href="/login" class="link">Sudah punya akun?</a>
            </div>
            <button type="button" class="btn-main col-lg-12 col-12">Daftar</button>
         </form>
      </div>
   </div>

   @include('includes.scripts')
</body>

</html>