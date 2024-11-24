<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bigotes Felices</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Montserrat:wght@300;400;500&display=swap"
  rel="stylesheet">

</head> 



<body>

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <defs>
      <symbol xmlns="http://www.w3.org/2000/svg" id="link" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M12 19a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0-4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm-5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm7-12h-1V2a1 1 0 0 0-2 0v1H8V2a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9h16Zm0-11H4V6a1 1 0 0 1 1-1h1v1a1 1 0 0 0 2 0V5h8v1a1 1 0 0 0 2 0V5h1a1 1 0 0 1 1 1ZM7 15a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0 4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="category" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 5.5h-6.28l-.32-1a3 3 0 0 0-2.84-2H5a3 3 0 0 0-3 3v13a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-10a3 3 0 0 0-3-3Zm1 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-13a1 1 0 0 1 1-1h4.56a1 1 0 0 1 .95.68l.54 1.64a1 1 0 0 0 .95.68h7a1 1 0 0 1 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="calendar" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="heart" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M20.16 4.61A6.27 6.27 0 0 0 12 4a6.27 6.27 0 0 0-8.16 9.48l7.45 7.45a1 1 0 0 0 1.42 0l7.45-7.45a6.27 6.27 0 0 0 0-8.87Zm-1.41 7.46L12 18.81l-6.75-6.74a4.28 4.28 0 0 1 3-7.3a4.25 4.25 0 0 1 3 1.25a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 6.05Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="plus" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="minus" viewBox="0 0 24 24">
        <path fill="currentColor" d="M19 11H5a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M8.5 19a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 8.5 19ZM19 16H7a1 1 0 0 1 0-2h8.491a3.013 3.013 0 0 0 2.885-2.176l1.585-5.55A1 1 0 0 0 19 5H6.74a3.007 3.007 0 0 0-2.82-2H3a1 1 0 0 0 0 2h.921a1.005 1.005 0 0 1 .962.725l.155.545v.005l1.641 5.742A3 3 0 0 0 7 18h12a1 1 0 0 0 0-2Zm-1.326-9l-1.22 4.274a1.005 1.005 0 0 1-.963.726H8.754l-.255-.892L7.326 7ZM16.5 19a1.5 1.5 0 1 0 1.5 1.5a1.5 1.5 0 0 0-1.5-1.5Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="check" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M18.71 7.21a1 1 0 0 0-1.42 0l-7.45 7.46l-3.13-3.14A1 1 0 1 0 5.29 13l3.84 3.84a1 1 0 0 0 1.42 0l8.16-8.16a1 1 0 0 0 0-1.47Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="trash" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M10 18a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1ZM20 6h-4V5a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v1H4a1 1 0 0 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8h1a1 1 0 0 0 0-2ZM10 5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4Zm7 14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8h10Zm-3-1a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-outline" viewBox="0 0 15 15">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
          d="M7.5 9.804L5.337 11l.413-2.533L4 6.674l2.418-.37L7.5 4l1.082 2.304l2.418.37l-1.75 1.793L9.663 11L7.5 9.804Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-solid" viewBox="0 0 15 15">
        <path fill="currentColor"
          d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M15.71 12.71a6 6 0 1 0-7.42 0a10 10 0 0 0-6.22 8.18a1 1 0 0 0 2 .22a8 8 0 0 1 15.9 0a1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1a10 10 0 0 0-6.25-8.19ZM12 12a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 15 15">
        <path fill="currentColor"
          d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
      </symbol>

    </defs>
  </svg>

  <div class="preloader-wrapper">
    <div class="preloader">
    </div>
  </div>

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
  <div class="offcanvas-header justify-content-center">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="order-md-last">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Your cart</span>
        <span class="badge bg-primary rounded-circle pt-2" id="cart-count">0</span>
      </h4>
      <ul class="list-group mb-3" id="cart-items">
        <!-- Los items del carrito se cargarán dinámicamente aquí -->
      </ul>
      <li class="list-group-item d-flex justify-content-between">
        <span class="fw-bold">Total (USD)</span>
        <strong id="cart-total">$0</strong>
      </li>
      <a href="#login" class="w-100 btn btn-primary btn-lg">Inicia sesión!</a>

    </div>
  </div>
</div>


  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch"
    aria-labelledby="Search">
    <div class="offcanvas-header justify-content-center">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

      <div class="order-md-last">
        <h4 class="text-primary text-uppercase mb-3">
          Search
        </h4>
        <div class="search-bar border rounded-2 border-dark-subtle">
          <form id="search-form" class="text-center d-flex align-items-center" action="" method="">
            <input type="text" class="form-control border-0 bg-transparent" placeholder="Search Here" />
            <iconify-icon icon="tabler:search" class="fs-4 me-3"></iconify-icon>
          </form>
        </div>
      </div>
    </div>
  </div>

  <header>
    <div class="container py-2">
      <div class="row py-4 pb-0 pb-sm-4 align-items-center ">

        <div class="col-sm-4 col-lg-3 text-center text-sm-start">
          <div class="main-logo">
            <a href="index.html">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
            </a>
          </div>
        </div>

          <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-5 d-none d-lg-block">
            <div class="search-bar border rounded-2 px-3 border-dark-subtle">
              <form id="search-form" class="text-center d-flex align-items-center" action="" method="">
                <input type="text" class="form-control border-0 bg-transparent"
                  placeholder="BUsca entre todos nuestros productos" />
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path fill="currentColor"
                    d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
                </svg>
              </form>
            </div>
          </div>





          <div class="col-sm-8 col-lg-4 d-flex justify-content-end gap-5 align-items-center mt-4 mt-sm-0 justify-content-center justify-content-sm-end">
          <div class="support-box text-end d-none d-xl-block">
          @auth
        <div class="user-info">
          <span class="text-muted">Hola, {{ Auth::user()->name }}!</span>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-link text-decoration-none text-muted">Cerrar sesión</button>
          </form>
        </div>
        @else
        <!-- Si el usuario no está autenticado, muestra un botón de login -->
        <div>
          <a href="{{ route('login') }}" class="btn btn-primary">Iniciar sesión</a>
        </div>
        @endauth
        </div>
        </div>
        </div>



    <div class="container">
      <nav class="main-menu d-flex navbar navbar-expand-lg ">

        <div class="d-flex d-lg-none align-items-end mt-3">
          <ul class="d-flex justify-content-end list-unstyled m-0">
            <li>
              <a href="account.html" class="mx-3">
                <iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon>
              </a>
            </li>
            <li>
              <a href="wishlist.html" class="mx-3">
                <iconify-icon icon="mdi:heart" class="fs-4"></iconify-icon>
              </a>
            </li>

            <li>
              <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                aria-controls="offcanvasCart">
                <iconify-icon icon="mdi:cart" class="fs-4 position-relative"></iconify-icon>
                <span class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">
                  00
                </span>
              </a>
            </li>

            <li>
              <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch"
                aria-controls="offcanvasSearch">
                <iconify-icon icon="tabler:search" class="fs-4"></iconify-icon>
                </span>
              </a>
            </li>
          </ul>

        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

          <div class="offcanvas-header justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body justify-content-between">
            <select class="filter-categories border-0 mb-0 me-5">
              <option>Shop by Category</option>
              <option>Clothes</option>
              <option>Food</option>
              <option>Food</option>
              <option>Toy</option>
            </select>

            <ul class="navbar-nav menu-list list-unstyled d-flex gap-md-3 mb-0">
              <li class="nav-item">
                <a href="index.html" class="nav-link active">Inicio</a>
              </li>

              <li class="nav-item">
                <a href="index.html" class="nav-link">Productos</a>
              </li>

              <li class="nav-item">
                <a href="index.html" class="nav-link">Contactanos</a>
              </li>
              <li class="nav-item">
                <a href="index.html" class="nav-link">agenda tu cita</a>
              </li>
            </ul>

            <div class="d-none d-lg-flex align-items-end">
              <ul class="d-flex justify-content-end list-unstyled m-0">
                <li>
                  <a href="index.html" class="mx-3">
                    <iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon>
                  </a>
                </li>
                <li>
                  <a href="index.html" class="mx-3">
                    <iconify-icon icon="mdi:heart" class="fs-4"></iconify-icon>
                  </a>
                </li>

                <li class="">
                  <a href="index.html" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                    aria-controls="offcanvasCart">
                    <iconify-icon icon="mdi:cart" class="fs-4 position-relative"></iconify-icon>
                    <span class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">
                      00
                    </span>
                  </a>
                </li>
              </ul>

            </div>

          </div>

        </div>

      </nav>



    </div>
  </header>

  <section id="banner" style="background: #F9F3EC;">
    <div class="container">
      <div class="swiper main-swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide py-5">
            <div class="row banner-content align-items-center">
              <div class="img-wrapper col-md-5">
                <img src="{{ asset('assets/images/banner-img.png') }}" class="img-fluid">

              </div>
              <div class="content-wrapper col-md-7 p-5 mb-5">
                <div class="secondary-font text-primary text-uppercase mb-4">Save 10 - 20 % off</div>
                <h2 class="banner-title display-1 fw-normal">Los mejores preductos del mercado<span class="text-primary"> para tus mascotas</span>
                </h2>
                <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                  shop now
                  <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                    <use xlink:href="#arrow-right"></use>
                  </svg></a>
              </div>

            </div>
          </div>
          <div class="swiper-slide py-5">
            <div class="row banner-content align-items-center">
              <div class="img-wrapper col-md-5">
              <img src="{{ asset('assets/images/banner-img3.png') }}" class="img-fluid">

              </div>
              <div class="content-wrapper col-md-7 p-5 mb-5">
                <div class="secondary-font text-primary text-uppercase mb-4">Save 10 - 20 % off</div>
                <h2 class="banner-title display-1 fw-normal">Servicio veterinario <span class="text-primary">para tus peluditos</span>
                </h2>
                <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                  shop now
                  <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                    <use xlink:href="#arrow-right"></use>
                  </svg></a>
              </div>

            </div>
          </div>
          <div class="swiper-slide py-5">
            <div class="row banner-content align-items-center">
              <div class="img-wrapper col-md-5">
              <img src="{{ asset('assets/images/banner-img4.png') }}" class="img-fluid">

              </div>
              <div class="content-wrapper col-md-7 p-5 mb-5">
                <div class="secondary-font text-primary text-uppercase mb-4">Save 10 - 20 % off</div>
                <h2 class="banner-title display-1 fw-normal">Porque sabemos lo mucho que te <span class="text-primary">importan</span>
                </h2>
                <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                  shop now
                  <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                    <use xlink:href="#arrow-right"></use>
                  </svg></a>
              </div>

            </div>
          </div>
        </div>

        <div class="swiper-pagination mb-5"></div>

      </div>
    </div>
  </section>

  <section id="categories">
    <div class="container my-3 py-5">
        <div class="row">
            <div class="col-12">
                <!-- Contenedor para el desplazamiento horizontal -->
                <div class="d-flex overflow-auto">
                    <!-- Categoría para Aves -->
                    <div class="categories-item text-center mx-3">
                        <a href="{{ route('productos.especie', ['especie' => 'ave']) }}" class="categories-item">
                            <iconify-icon class="category-icon" icon="ph:bird"></iconify-icon>
                            <h5>Para tus aves</h5>
                        </a>
                    </div>

                    <!-- Categoría para Perros -->
                    <div class="categories-item text-center mx-3">
                        <a href="{{ route('productos.especie', ['especie' => 'perro']) }}" class="categories-item">
                            <iconify-icon class="category-icon" icon="ph:dog"></iconify-icon>
                            <h5>Para tus perritos</h5>
                        </a>
                    </div>

                    <!-- Categoría para Peces -->
                    <div class="categories-item text-center mx-3">
                        <a href="{{ route('productos.especie', ['especie' => 'pez']) }}" class="categories-item">
                            <iconify-icon class="category-icon" icon="ph:fish"></iconify-icon>
                            <h5>Para tus peces</h5>
                        </a>
                    </div>

                    <!-- Categoría para Gatos -->
                    <div class="categories-item text-center mx-3">
                        <a href="{{ route('productos.especie', ['especie' => 'gato']) }}" class="categories-item">
                            <iconify-icon class="category-icon" icon="ph:cat"></iconify-icon>
                            <h5>Para gatitos</h5>
                        </a>
                    </div>

                    <!-- Categoría para Bovinos -->
                    <div class="categories-item text-center mx-3">
                        <a href="{{ route('productos.especie', ['especie' => 'bovino']) }}" class="categories-item">
                            <iconify-icon class="category-icon" icon="ph:cow"></iconify-icon>
                            <h5>Para bovinos</h5>
                        </a>
                    </div>

                    <!-- Categoría para Equinos -->
                    <div class="categories-item text-center mx-3">
                        <a href="{{ route('productos.especie', ['especie' => 'equino']) }}" class="categories-item">
                            <iconify-icon class="category-icon" icon="ph:horse"></iconify-icon>
                            <h5>Para equinos</h5>
                        </a>
                    </div>

                    <!-- Categoría para Porcinos -->
                    <div class="categories-item text-center mx-3">
                        <a href="{{ route('productos.especie', ['especie' => 'porcino']) }}" class="categories-item">
                            <iconify-icon class="category-icon" icon="ph:piggy-bank"></iconify-icon>
                            <h5>Para porcinos</h5>
                        </a>
                    </div>

                    <!-- Categoría para Cunícolas (Conejos, Liebres) -->
                    <div class="categories-item text-center mx-3">
                        <a href="{{ route('productos.especie', ['especie' => 'cunicolo']) }}" class="categories-item">
                            <iconify-icon class="category-icon" icon="ph:rabbit"></iconify-icon>
                            <h5>Para cunícolas (conejos, liebres)</h5>
                        </a>
                    </div>

                    <!-- Categoría para Tortugas -->
                    <div class="categories-item text-center mx-3">
                        <a href="{{ route('productos.especie', ['especie' => 'tortuga']) }}" class="categories-item">
                            <iconify-icon icon="lucide:turtle" class="category-icon"></iconify-icon>
                            <h5>Para tortugas</h5>
                        </a>
                    </div>

                    <!-- Categoría para Cabras -->
                    <div class="categories-item text-center mx-3">
                        <a href="{{ route('productos.especie', ['especie' => 'cabra']) }}" class="categories-item">
                            <iconify-icon class="category-icon" icon="fluent-emoji-high-contrast:goat"></iconify-icon>
                            <h5>Para cabras</h5>
                        </a>
                    </div>

                    <!-- Categoría para Roedores -->
                    <div class="categories-item text-center mx-3">
                        <a href="{{ route('productos.especie', ['especie' => 'roedor']) }}" class="categories-item">
                            <iconify-icon class="category-icon" icon="lucide:rat"></iconify-icon>
                            <h5>Para roedores</h5>
                        </a>
                    </div>

                    <!-- Categoría para Serpientes y Reptiles -->
                    <div class="categories-item text-center mx-3">
                        <a href="{{ route('productos.especie', ['especie' => 'reptil']) }}" class="categories-item">
                            <iconify-icon icon="icon-park-outline:snake-zodiac" class="category-icon"></iconify-icon>
                            <h5>Para serpientes y demás reptiles</h5>
                        </a>
                    </div>

                    <!-- Categoría para Otros -->
                    <div class="categories-item text-center mx-3">
                        <a href="{{ route('productos.especie', ['especie' => 'otro']) }}" class="categories-item">
                            <iconify-icon class="category-icon" icon="ph:paw-print"></iconify-icon>
                            <h5>Otros</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="clothing" class="my-5 overflow-hidden">
    <div class="container pb-5">
        <div class="section-header d-md-flex justify-content-between align-items-center mb-3">
            <h2 class="display-3 fw-normal">Ropa para tus mascotas</h2>
            <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                  Ver más
                  <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                    <use xlink:href="#arrow-right"></use>
                  </svg>
            </a>
        </div>
        <div id="ropa-contenedor" class="overflow-auto" style="white-space: nowrap;">
            <div class="d-flex gap-4">
                <!-- Los productos de ropa se generarán aquí dinámicamente -->
            </div>
        </div>
    </div>
</section>

<section id="foodies" class="my-5">
    <div class="container my-5 py-5">
        <div class="section-header d-md-flex justify-content-between align-items-center">
            <h2 class="display-3 fw-normal">Alimento para mascotas</h2>
            <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                  Ver más
                  <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                    <use xlink:href="#arrow-right"></use>
                  </svg>
            </a>
        </div>
        <div id="alimento-contenedor" class="overflow-auto" style="white-space: nowrap;">
            <div class="d-flex gap-4">
                <!-- Los productos de alimentos se generarán aquí dinámicamente -->
            </div>
        </div>
    </div>
</section>

<section id="medicina" class="my-5">
    <div class="container my-5 py-5">
        <div class="section-header d-md-flex justify-content-between align-items-center">
            <h2 class="display-3 fw-normal">Medicina para mascotas</h2>
            <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                  Ver más
                  <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                    <use xlink:href="#arrow-right"></use>
                  </svg>
            </a>
        </div>
        <div id="medicina-contenedor" class="overflow-auto" style="white-space: nowrap;">
            <div class="d-flex gap-4">
                <!-- Los productos de medicina se generarán aquí dinámicamente -->
            </div>
        </div>
    </div>
</section>

<section id="Otros" class="my-5">
    <div class="container my-5 py-5">
        <div class="section-header d-md-flex justify-content-between align-items-center">
            <h2 class="display-3 fw-normal">Más productos para tus mascotas</h2>
            <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                  Ver más
                  <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                    <use xlink:href="#arrow-right"></use>
                  </svg>
            </a>
        </div>
        <div id="Otros-contenedor" class="overflow-auto" style="white-space: nowrap;">
            <div class="d-flex gap-4">
                <!-- Los productos de medicina se generarán aquí dinámicamente -->
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('assets/js/agregarProductos.js') }}"></script>


  <section id="banner-2" class="my-3" style="background: #F9F3EC;">
    <div class="container">
      <div class="row flex-row-reverse banner-content align-items-center">
        <div class="img-wrapper col-12 col-md-6">
         <img src="{{ asset('assets/images/banner-img2.png') }}" class="img-fluid">

        </div>
        <div class="content-wrapper col-12 offset-md-1 col-md-5 p-5">
          <div class="secondary-font text-primary text-uppercase mb-3 fs-4">Comunicate con nosotros</div>
          <h2 class="banner-title display-1 fw-normal">Agenda tu cita ahora mismo
          </h2>
          <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
            Agendar
            <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
              <use xlink:href="#arrow-right"></use>
            </svg></a>
        </div>

      </div>
    </div>
  </section>


  <!-- Frase decorativa al final -->
  <div class="text-center mt-4">
      <p class="fs-6 text-muted">"Porque tus mascotas merecen lo mejor. ¡Únete a la familia Bigotes Felices!"</p>
    </div>
  </div>
</footer>

  <div id="footer-bottom">
    <div class="container">
      <hr class="m-0">
      <div class="row mt-3">
        <div class="col-md-6 copyright">
          <p class="secondary-font">© 2023 Waggy. All rights reserved.</p>
        </div>
        <div class="col-md-6 text-md-end">
          <p class="secondary-font">Free HTML Template by <a href="https://templatesjungle.com/" target="_blank"
              class="text-decoration-underline fw-bold text-black-50"> TemplatesJungle</a> Distributed by <a href="https://themewagon.com/" target="_blank"
              class="text-decoration-underline fw-bold text-black-50"> ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </div>


  <script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</body>

</html>