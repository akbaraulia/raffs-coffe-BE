@extends('layouts.app')

@section('title', 'Halaman Order Kamu')

@section('content')
<div class="container mt-5">
   <div class="custom-title-padding">
      <h2 class="mb-4">Order Kamu</h2>
      <div class="row">
         <div class="col-xl-8">
            <div class="card-order-menu mb-5">
               <div class="row">
                  <div class="col">
                     <label class="label-order mb-3">Nama Pemesan</label>
                     <input type="text" class="form-control" placeholder="Tuliskan nama pemesanan"
                        aria-label="Tuliskan nama pemesanan">
                  </div>
                  <div class="col">
                     <label class="label-order mb-3">Nomor Pemesan</label>
                     <input type="text" class="form-control" placeholder="Tuliskan nomor pemesanan"
                        aria-label="Tuliskan nomor pemesanan">
                  </div>
               </div>
               <div class="card-order-item">
                  <div class="d-flex align-items-center">
                     <img src="{{ asset('assets/images/mie_ayam.png') }}" class="img-card rounded-4 me-4"
                        alt="mie_ayam" />
                     <div class="row">
                        <h5 class="order-item-title">Mie Ayam</h5>
                        <span class="order-item-sub">Rp. 25.000,00</span>
                     </div>
                     <div class="button-trash ms-auto ">
                        <img src="{{ asset('assets/images/trash.png') }}" alt="trash">
                     </div>
                  </div>
                  <div class="mt-3">
                     <p class="order-item-desc">Lorem ipsum dolor sit amet consectetur. Volutpat varius enim cras mi.
                     </p>
                  </div>
               </div>
               <div class="card-order-item">
                  <div class="d-flex align-items-center">
                     <img src="{{ asset('assets/images/mie_ayam.png') }}" class="img-card rounded-4 me-4"
                        alt="mie_ayam" />
                     <div class="row">
                        <h5 class="order-item-title">Mie Ayam</h5>
                        <span class="order-item-sub">Rp. 25.000,00</span>
                     </div>
                     <div class="button-trash ms-auto ">
                        <img src="{{ asset('assets/images/trash.png') }}" alt="trash">
                     </div>
                  </div>
                  <div class="mt-3">
                     <p class="order-item-desc">Lorem ipsum dolor sit amet consectetur. Volutpat varius enim cras mi.
                     </p>
                  </div>
               </div>
               <div class="card-order-item">
                  <div class="d-flex align-items-center">
                     <img src="{{ asset('assets/images/mie_ayam.png') }}" class="img-card rounded-4 me-4"
                        alt="mie_ayam" />
                     <div class="row">
                        <h5 class="order-item-title">Mie Ayam</h5>
                        <span class="order-item-sub">Rp. 25.000,00</span>
                     </div>
                     <div class="button-trash ms-auto ">
                        <img src="{{ asset('assets/images/trash.png') }}" alt="trash">
                     </div>
                  </div>
                  <div class="mt-3">
                     <p class="order-item-desc">Lorem ipsum dolor sit amet consectetur. Volutpat varius enim cras mi.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4">
            <div class="card-order-menu">
               <h4 class="label-order">Total Harga (2) Produk</h4>
               <span class="total-harga">Rp. 75.000,00</span>
               <hr />
               <a href="/order-kamu"
                  class="button-primary d-none d-md-block py-2 px-5 text-center justify-content-center">Bayar</a>

               <a href="/order-kamu"
                  class="button-sm-primary d-sm-block d-md-none py-2 px-2 text-center d-flex justify-content-center">Bayar</a>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection