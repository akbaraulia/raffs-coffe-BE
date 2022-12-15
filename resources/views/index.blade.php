@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="container mt-5">
   <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
         <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
         <div class="carousel-item active" data-bs-interval="5000">
            <img src="{{ asset('assets/images/blank_image.png') }}" width="700" height="300" class="d-block w-100"
               alt="carousel_image">
            <div class="carousel-caption d-none d-md-block">
               <h5>First slide label</h5>
               <p>Some representative placeholder content for the first slide.</p>
            </div>
         </div>
         <div class="carousel-item" data-bs-interval="2000">
            <img src="{{ asset('assets/images/blank_image.png') }}" width="700" height="300" class="d-block w-100"
               alt="carousel_image">
            <div class="carousel-caption d-none d-md-block">
               <h5>Second slide label</h5>
               <p>Some representative placeholder content for the second slide.</p>
            </div>
         </div>
         <div class="carousel-item">
            <img src="{{ asset('assets/images/blank_image.png') }}" width="700" height="300" class="d-block w-100"
               alt="carousel_image">
            <div class="carousel-caption d-none d-md-block">
               <h5>Third slide label</h5>
               <p>Some representative placeholder content for the third slide.</p>
            </div>
         </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
      </button>
   </div>

   {{-- Button Desktop --}}
   <div class="d-inline-block">
      <form action="/products" class="form-inline d-none d-md-block my-4 float-start">
         <button type="submit" class="btn-sm-primary rounded-4 text-center me-2">Semua menu</button>
         <button type="submit" class="btn-sm-secondary border border-1 rounded-4 text-center me-2">Makanan</button>
         <button type="submit" class="btn-sm-secondary border border-1 rounded-4 text-center me-2">Minuman</button>
      </form>
   </div>

   {{-- Button Mobile --}}
   <form action="/products" class="form-inline d-sm-block d-md-none my-4 float-start">
      <button type="submit" class="btn-sm-primary py-2 px-2 rounded-4 text-center me-2 mb-2">Semua menu</button>
      <button type="submit"
         class="btn-sm-secondary py-2 px-2 border border-1 rounded-4 text-center me-2 mb-2">Makanan</button>
      <button type="submit"
         class="btn-sm-secondary py-2 px-2 border border-1 rounded-4 text-center me-2 mb-2">Minuman</button>
   </form>

   <div class="row float-start">
      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
         <div class="card shadow border border-0 me-lg-2 mb-lg-4 mb-md-4 mb-sm-4 mb-4">
            <img src="{{ asset('assets/images/product_image.jpeg') }}" class="card-img-top product-image"
               alt="product-image">
            <div class="card-body">
               <h5 class="card-title -mb-2">Mie Ayam</h5>
               <p class="price-text">Rp. 25.000,00</p>
               <p class="card-sub">Lorem ipsum dolor sit amet,
                  consectetur adipiscing property is not only cause...</p>
               <a href="/detail-product"
                  class="btn-sm-primary d-none d-md-block py-2 px-4 rounded-4 text-center float-end">Lihat
                  Detail &nbsp; <i data-feather="arrow-right" width="14" height="14"></i></a>

               <a href="/detail-product"
                  class="btn-sm-primary d-sm-block d-md-none py-2 px-4 rounded-4 text-center d-flex justify-content-center">Lihat
                  Detail &nbsp;</a>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
         <div class="card shadow border border-0 me-lg-2 mb-lg-4 mb-md-4 mb-sm-4 mb-4">
            <img src="{{ asset('assets/images/product_image.jpeg') }}" class="card-img-top product-image"
               alt="product-image">
            <div class="card-body">
               <h5 class="card-title -mb-2">Mie Ayam</h5>
               <p class="price-text">Rp. 25.000,00</p>
               <p class="card-sub">Lorem ipsum dolor sit amet,
                  consectetur adipiscing property is not only cause...</p>
               <a href="/detail-product"
                  class="btn-sm-primary d-none d-md-block py-2 px-4 rounded-4 text-center float-end">Lihat
                  Detail &nbsp; <i data-feather="arrow-right" width="14" height="14"></i></a>

               <a href="/detail-product"
                  class="btn-sm-primary d-sm-block d-md-none py-2 px-4 rounded-4 text-center d-flex justify-content-center">Lihat
                  Detail &nbsp;</a>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
         <div class="card shadow border border-0 me-lg-2 mb-lg-4 mb-md-4 mb-sm-4 mb-4">
            <img src="{{ asset('assets/images/product_image.jpeg') }}" class="card-img-top product-image"
               alt="product-image">
            <div class="card-body">
               <h5 class="card-title -mb-2">Mie Ayam</h5>
               <p class="price-text">Rp. 25.000,00</p>
               <p class="card-sub">Lorem ipsum dolor sit amet,
                  consectetur adipiscing property is not only cause...</p>
               <a href="/detail-product"
                  class="btn-sm-primary d-none d-md-block py-2 px-4 rounded-4 text-center float-end">Lihat
                  Detail &nbsp; <i data-feather="arrow-right" width="14" height="14"></i></a>

               <a href="/detail-product"
                  class="btn-sm-primary d-sm-block d-md-none py-2 px-4 rounded-4 text-center d-flex justify-content-center">Lihat
                  Detail &nbsp;</a>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
         <div class="card shadow border border-0 me-lg-2 mb-lg-4 mb-md-4 mb-sm-4 mb-4">
            <img src="{{ asset('assets/images/product_image.jpeg') }}" class="card-img-top product-image"
               alt="product-image">
            <div class="card-body">
               <h5 class="card-title -mb-2">Mie Ayam</h5>
               <p class="price-text">Rp. 25.000,00</p>
               <p class="card-sub">Lorem ipsum dolor sit amet,
                  consectetur adipiscing property is not only cause...</p>
               <a href="/detail-product"
                  class="btn-sm-primary d-none d-md-block py-2 px-4 rounded-4 text-center float-end">Lihat
                  Detail &nbsp; <i data-feather="arrow-right" width="14" height="14"></i></a>

               <a href="/detail-product"
                  class="btn-sm-primary d-sm-block d-md-none py-2 px-4 rounded-4 text-center d-flex justify-content-center">Lihat
                  Detail &nbsp;</a>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
         <div class="card shadow border border-0 me-lg-2 mb-lg-4 mb-md-4 mb-sm-4 mb-4">
            <img src="{{ asset('assets/images/product_image.jpeg') }}" class="card-img-top product-image"
               alt="product-image">
            <div class="card-body">
               <h5 class="card-title -mb-2">Mie Ayam</h5>
               <p class="price-text">Rp. 25.000,00</p>
               <p class="card-sub">Lorem ipsum dolor sit amet,
                  consectetur adipiscing property is not only cause...</p>
               <a href="/detail-product"
                  class="btn-sm-primary d-none d-md-block py-2 px-4 rounded-4 text-center float-end">Lihat
                  Detail &nbsp; <i data-feather="arrow-right" width="14" height="14"></i></a>

               <a href="/detail-product"
                  class="btn-sm-primary d-sm-block d-md-none py-2 px-4 rounded-4 text-center d-flex justify-content-center">Lihat
                  Detail &nbsp;</a>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
         <div class="card shadow border border-0 me-lg-2 mb-lg-4 mb-md-4 mb-sm-4 mb-4">
            <img src="{{ asset('assets/images/product_image.jpeg') }}" class="card-img-top product-image"
               alt="product-image">
            <div class="card-body">
               <h5 class="card-title -mb-2">Mie Ayam</h5>
               <p class="price-text">Rp. 25.000,00</p>
               <p class="card-sub">Lorem ipsum dolor sit amet,
                  consectetur adipiscing property is not only cause...</p>
               <a href="/detail-product"
                  class="btn-sm-primary d-none d-md-block py-2 px-4 rounded-4 text-center float-end">Lihat
                  Detail &nbsp; <i data-feather="arrow-right" width="14" height="14"></i></a>

               <a href="/detail-product"
                  class="btn-sm-primary d-sm-block d-md-none py-2 px-4 rounded-4 text-center d-flex justify-content-center">Lihat
                  Detail &nbsp;</a>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
         <div class="card shadow border border-0 me-lg-2 mb-lg-4 mb-md-4 mb-sm-4 mb-4">
            <img src="{{ asset('assets/images/product_image.jpeg') }}" class="card-img-top product-image"
               alt="product-image">
            <div class="card-body">
               <h5 class="card-title -mb-2">Mie Ayam</h5>
               <p class="price-text">Rp. 25.000,00</p>
               <p class="card-sub">Lorem ipsum dolor sit amet,
                  consectetur adipiscing property is not only cause...</p>
               <a href="/detail-product"
                  class="btn-sm-primary d-none d-md-block py-2 px-4 rounded-4 text-center float-end">Lihat
                  Detail &nbsp; <i data-feather="arrow-right" width="14" height="14"></i></a>

               <a href="/detail-product"
                  class="btn-sm-primary d-sm-block d-md-none py-2 px-4 rounded-4 text-center d-flex justify-content-center">Lihat
                  Detail &nbsp;</a>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
         <div class="card shadow border border-0 me-lg-2 mb-lg-4 mb-md-4 mb-sm-4 mb-4">
            <img src="{{ asset('assets/images/product_image.jpeg') }}" class="card-img-top product-image"
               alt="product-image">
            <div class="card-body">
               <h5 class="card-title -mb-2">Mie Ayam</h5>
               <p class="price-text">Rp. 25.000,00</p>
               <p class="card-sub">Lorem ipsum dolor sit amet,
                  consectetur adipiscing property is not only cause...</p>
               <a href="/detail-product"
                  class="btn-sm-primary d-none d-md-block py-2 px-4 rounded-4 text-center float-end">Lihat
                  Detail &nbsp; <i data-feather="arrow-right" width="14" height="14"></i></a>

               <a href="/detail-product"
                  class="btn-sm-primary d-sm-block d-md-none py-2 px-4 rounded-4 text-center d-flex justify-content-center">Lihat
                  Detail &nbsp;</a>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
         <div class="card shadow border border-0 me-lg-2 mb-lg-4 mb-md-4 mb-sm-4 mb-4">
            <img src="{{ asset('assets/images/product_image.jpeg') }}" class="card-img-top product-image"
               alt="product-image">
            <div class="card-body">
               <h5 class="card-title -mb-2">Mie Ayam</h5>
               <p class="price-text">Rp. 25.000,00</p>
               <p class="card-sub">Lorem ipsum dolor sit amet,
                  consectetur adipiscing property is not only cause...</p>
               <a href="/detail-product"
                  class="btn-sm-primary d-none d-md-block py-2 px-4 rounded-4 text-center float-end">Lihat
                  Detail &nbsp; <i data-feather="arrow-right" width="14" height="14"></i></a>

               <a href="/detail-product"
                  class="btn-sm-primary d-sm-block d-md-none py-2 px-4 rounded-4 text-center d-flex justify-content-center">Lihat
                  Detail &nbsp;</a>
            </div>
         </div>
      </div>
   </div>

</div>
@endsection