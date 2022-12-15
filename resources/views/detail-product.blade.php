@extends('layouts.app')

@section('title', 'Halaman Detail Product')

@section('content')
<div class="container mt-5">
   <div class="row">
      <div class="col-xl-6">
         <img src="{{ asset('assets/images/product_image.jpeg') }}" class="img-fluid" alt="detail-product">
      </div>
      <div
         class="col-xl-3 mt-lg-3 mb-lg-2 mt-md-3 mb-md-2 mt-sm-3 mb-sm-2 mt-3 mb-2 justify-content-center align-self-center">
         <div class="px-4">
            <h1 class="px-3">MIE AYAM</h1>
            <hr />
            <p class="px-3">Harga: Rp. 25.000,00</p>
            <hr />
            <p class="px-3 desc-product lh-base">Deskripsi : Lorem Ipsum
               is simply dummy text of
               the printing and
               typesetting industry.
               Lorem Ipsum has been
               the industry's standard
               dummy text ever since
               the 1500s, when an
               unknown printer took
               a galley of type.</p>
         </div>
      </div>
      <div class="col-xl-3">
         <div class="card border border-0 custom-card mb-5">
            <div class="card-body ">
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
                  <a href="/detail-product"
                     class="button-primary d-none d-md-block py-2 px-4 rounded-4 text-center justify-content-center">Tambah
                     ke Order</a>

                  <a href="/detail-product"
                     class="button-primary d-sm-block d-md-none py-2 px-4 rounded-4 text-center d-flex justify-content-center">Tambah
                     ke Order</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection