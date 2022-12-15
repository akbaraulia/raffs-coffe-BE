<nav class="navbar navbar-expand-lg navbar-nav-scroll fixed-top shadow-sm bg-light">
   <div class="container py-3">
      <a class="nav-title d-flex" href="/">Raffs Coffe</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
         aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <ul class="navbar-nav ms-auto">
            @if (Request::is('login') || Request::is('register'))
            <li class="nav-item-md me-3">
               <a class="nav-link text-black nav-text" aria-current="page" href="/">Beranda</a>
            </li>
            <li class="nav-item-md me-3">
               <a class="nav-link text-black" href="#">Order Kamu</a>
            </li>
            <li class="nav-item-md me-3">
               <a class="nav-link text-black" href="#">Chat WhatsApp</a>
            </li>

            @else
            <li class="nav-item-md me-3">
               <a class="nav-link text-black nav-text" aria-current="page" href="/">Beranda</a>
            </li>
            <li class="nav-item-md me-3">
               <a class="nav-link text-black" href="#">Order Kamu</a>
            </li>
            <li class="nav-item-md me-3">
               <a class="nav-link text-black" href="#">Chat WhatsApp</a>
            </li>

            {{-- Button Desktop --}}
            <form action="/login" class="form-inline d-none d-md-block my-lg-0">
               <button type="submit" class="button-primary py-2 px-4 rounded-4 text-center">Masuk</button>
            </form>

            {{-- Button Mobile --}}
            <form action="/login" class="form-inline d-sm-block d-md-none">
               <button type="submit" class="button-primary py-2 px-4 rounded-4 text-center">Masuk</button>
            </form>
            @endif
         </ul>
      </div>
   </div>
   </div>
</nav>