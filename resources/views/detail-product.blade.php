@extends('layouts.app')

@section('title', 'Halaman Detail Product')

@section('content')
<div class="container custom-margin">
   <div class="row">
      <div class="col-xl-5">
         <img src="{{ asset('assets/images/mie_ayam.png') }}" class="img-fluid rounded-4 w-100 justify-content-center"
            alt="detail-product">
      </div>
      <div class="col-xl-4 mb-lg-2 mb-md-2 mb-sm-2 mb-2 justify-content-center">
         <div class="detail-product px-4">
            <h1 class="detail-title mt-xl-0 mt-3">Mie Ayam</h1>
            <p class="price-text">Rp. 25.000,00<span class="porsi">/porsi</span></p>
            <p class="desc-product">Lorem ipsum dolor sit amet consectetur. Dictum sit nunc id congue leo neque
               massa. Viverra condimentum consequat aliquam
               scelerisque non a nulla penatibus lectus. Tempor nulla faucibus magna augue nunc pellentesque nibh
               pulvinar risus.
               Euismod orci sit habitasse tempus.</p>
         </div>
      </div>
      <div class="col-xl-3">
         <div class="card card-detail-product border-0 mb-5">
            <div class="card-body">
               <div class="d-flex justify-content-between mt-2 mb-3">
                  <span>Harga:</span>
                  <span>Rp. 25.000,00</span>
               </div>
               <div class="d-flex justify-content-between mb-3">
                  <span>Status:</span>
                  <span>Tersedia</span>
               </div>
               <div class="d-flex justify-content-between mb-3">
                  <span>Stok:</span>
                  <span>8</span>
               </div>
               <div class="d-flex justify-content-between align-items-center mt-2 mb-3">
                  <span>Level:</span>
                  <div class="form-group col-xl-3">
                     <select class="form-select" aria-label="Default select menu">
                        <option selected value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                     </select>
                  </div>
               </div>
               <div class="d-flex justify-content-between align-items-center mb-3">
                  <span>Jumlah:</span>
                  <div class="form-group col-xl-3 col-lg-1 col-md-1 col-sm-2 col-2">
                     <input type="number" min="1" class="form-control" placeholder="0" />
                  </div>
               </div>
               <div class="mb-4">
                  <span class="">Request:</span>
                  <div class="form-group mt-2">
                     <textarea class="form-control" placeholder="Sambelnya dibanyakin" style="height: 100px"></textarea>
                  </div>
               </div>
               <div class="mb-3">
                  <a href="/order-kamu"
                     class="button-primary d-none d-md-block py-2 px-5 text-center justify-content-center">Tambah
                     Order</a>

                  <a href="/order-kamu"
                     class="button-sm-primary d-sm-block d-md-none py-2 px-2 text-center d-flex justify-content-center">Tambah
                     Order</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection