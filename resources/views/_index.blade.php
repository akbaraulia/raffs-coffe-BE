@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="container mt-5">
   <div class="row">
      <div class="d-flex flex-row justify-content-center">
         <div class="col-xl-6 col-lg-7 col-md-8 col-10">
            <div class="card shadow-sm border border-0 custom-card">
               <div class="card-body d-flex">
                  <div class="py-2 px-3">
                     <img src="{{ asset('assets/svg/undraw_coffee_re_x35h.svg') }}" class="img-card" alt="take-away">
                  </div>
                  <div class="py-2 px-4 align-self-center">
                     <h1 class="card-title">Take Away</h1>
                     <p class="card-sub">Pesan dan jemput makanan Anda kemudian.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row mt-3">
      <div class="d-flex flex-row justify-content-center">
         <div class="col-xl-6 col-lg-7 col-md-8 col-10">
            <div class="card shadow-sm border border-0 custom-card">
               <div class="card-body d-flex">
                  <div class="py-2 px-3">
                     <img src="{{ asset('assets/svg/undraw_on_the_way_re_swjt.svg') }}" class="img-card" alt="delivery">
                  </div>
                  <div class="py-2 px-4 align-self-center">
                     <h1 class="card-title">Delivery</h1>
                     <p class="card-sub">Pesan makan dan minta kirim ke alamat Anda.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row mt-3">
      <div class="d-flex flex-row justify-content-center">
         <div class="col-xl-6 col-lg-7 col-md-8 col-10">
            <a href="/products" class="text-decoration-none text-black">
               <div class="card shadow-sm border border-0 custom-card">
                  <div class="card-body d-flex">
                     <div class="py-2 px-3">
                        <img src="{{ asset('assets/svg/undraw_eating_together_re_ux62.svg') }}" class="img-card"
                           alt="dine-in">
                     </div>
                     <div class="py-2 px-4 align-self-center">
                        <h1 class="card-title">Dine-in</h1>
                        <p class="card-sub">Scan Barcode dan Pesan Menu langsung di tempat.</p>
                     </div>
                  </div>
               </div>
            </a>
         </div>
      </div>
   </div>
</div>
@endsection