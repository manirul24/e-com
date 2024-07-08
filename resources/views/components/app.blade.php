<!DOCTYPE html>
<html lang="en">

<head>
    <title>National University </title>
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

<link rel="stylesheet" type="text/css" href="css/vendor.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

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

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart"
        aria-labelledby="My Cart">
        <div class="offcanvas-header justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Your cart</span>
                    <span class="badge bg-primary rounded-circle pt-2">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Grey Hoodie</h6>
                            <small class="text-body-secondary">Brief description</small>
                        </div>
                        <span class="text-body-secondary">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Dog Food</h6>
                            <small class="text-body-secondary">Brief description</small>
                        </div>
                        <span class="text-body-secondary">$8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Soft Toy</h6>
                            <small class="text-body-secondary">Brief description</small>
                        </div>
                        <span class="text-body-secondary">$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span class="fw-bold">Total (USD)</span>
                        <strong>$20</strong>
                    </li>
                </ul>

                <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
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
                    <form id="search-form" class="text-center d-flex align-items-center" action=""
                        method="">
                        <input type="text" class="form-control border-0 bg-transparent"
                            placeholder="Search Here" />
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
                        <a href="{{ route('welcome') }}">
                            <img src="images/logo.png" alt="logo" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-5 d-none d-lg-block">
                    <div class="search-bar border rounded-2 px-3 border-dark-subtle">
                        <form id="search-form" class="text-center d-flex align-items-center" action=""
                            method="">
                            <input type="text" class="form-control border-0 bg-transparent"
                                placeholder="Search for more than 10,000 products" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
                            </svg>
                        </form>
                    </div>
                </div>

                <div
                    class="col-sm-8 col-lg-4 d-flex justify-content-end gap-5 align-items-center mt-4 mt-sm-0 justify-content-center justify-content-sm-end">
                    <div class="support-box text-end d-none d-xl-block">
                        <span class="fs-6 secondary-font text-muted">Phone</span>
                        <h5 class="mb-0">+980-34984089</h5>
                    </div>
                    <div class="support-box text-end d-none d-xl-block">
                        <span class="fs-6 secondary-font text-muted">Email</span>
                        <h5 class="mb-0">waggy@gmail.com</h5>
                    </div>



                </div>
            </div>
        </div>

        <div class="container-fluid">
            <hr class="m-0">
        </div>

        <x-top />
    </header>

    <section id="banner" style="background: #F9F3EC;">
        <div class="container">
            <div class="swiper main-swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide py-5">
                        <div class="row banner-content align-items-center">
                            <div class="img-wrapper col-md-5">
                                <img src="images/banner-img.png" class="img-fluid">
                            </div>
                            <div class="content-wrapper col-md-7 p-5 mb-5">
                                <div class="secondary-font text-primary text-uppercase mb-4">Save 10 - 20 % off</div>
                                <h2 class="banner-title display-1 fw-normal">Best destination for <span
                                        class="text-primary">your
                                        pets</span>
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
                                <img src="images//banner-img3.png" class="img-fluid">
                            </div>
                            <div class="content-wrapper col-md-7 p-5 mb-5">
                                <div class="secondary-font text-primary text-uppercase mb-4">Save 10 - 20 % off</div>
                                <h2 class="banner-title display-1 fw-normal">Best destination for <span
                                        class="text-primary">your
                                        pets</span>
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
                                <img src="images/banner-img4.png" class="img-fluid">
                            </div>
                            <div class="content-wrapper col-md-7 p-5 mb-5">
                                <div class="secondary-font text-primary text-uppercase mb-4">Save 10 - 20 % off</div>
                                <h2 class="banner-title display-1 fw-normal">Best destination for <span
                                        class="text-primary">your
                                        pets</span>
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




    {{ $slot }}

    <section id="foodies" class="my-5">
        <div class="container my-5 py-5">

            <div class="section-header d-md-flex justify-content-between align-items-center">
                <h2 class="display-3 fw-normal">Pet Foodies</h2>
                <div class="mb-4 mb-md-0">
                    <p class="m-0">
                        <button class="filter-button me-4  active" data-filter="*">ALL</button>
                        <button class="filter-button me-4 " data-filter=".cat">CAT</button>
                        <button class="filter-button me-4 " data-filter=".dog">DOG</button>
                        <button class="filter-button me-4 " data-filter=".bird">BIRD</button>
                    </p>
                </div>
                <div>
                    <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                        shop now
                        <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                            <use xlink:href="#arrow-right"></use>
                        </svg></a>
                </div>
            </div>

            <div class="isotope-container row">

                <div class="item cat col-md-4 col-lg-3 my-4">
                    <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
            New
          </div> -->
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item9.jpg" class="img-fluid rounded-4"
                                alt="image"></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3 ">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>

                <div class="item dog col-md-4 col-lg-3 my-4">
                    <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
                        New
                    </div>
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item10.jpg" class="img-fluid rounded-4"
                                alt="image"></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3 ">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>

                <div class="item dog col-md-4 col-lg-3 my-4">
                    <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
            New
          </div> -->
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item11.jpg" class="img-fluid rounded-4"
                                alt="image"></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3 ">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>

                <div class="item cat col-md-4 col-lg-3 my-4">
                    <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
                        Sold
                    </div>
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item12.jpg" class="img-fluid rounded-4"
                                alt="image"></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3 ">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>

                <div class="item bird col-md-4 col-lg-3 my-4">
                    <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
            New
          </div> -->
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item13.jpg" class="img-fluid rounded-4"
                                alt="image"></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3 ">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>

                <div class="item bird col-md-4 col-lg-3 my-4">
                    <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
            New
          </div> -->
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item14.jpg" class="img-fluid rounded-4"
                                alt="image"></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3 ">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>

                <div class="item dog col-md-4 col-lg-3 my-4">
                    <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
                        Sale
                    </div>
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item15.jpg" class="img-fluid rounded-4"
                                alt="image"></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3 ">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>

                <div class="item cat col-md-4 col-lg-3 my-4">
                    <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
            New
          </div> -->
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item16.jpg" class="img-fluid rounded-4"
                                alt="image"></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3 ">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>


            </div>


        </div>
    </section>

    <section id="banner-2" class="my-3" style="background: #F9F3EC;">
        <div class="container">
            <div class="row flex-row-reverse banner-content align-items-center">
                <div class="img-wrapper col-12 col-md-6">
                    <img src="images/banner-img2.png" class="img-fluid">
                </div>
                <div class="content-wrapper col-12 offset-md-1 col-md-5 p-5">
                    <div class="secondary-font text-primary text-uppercase mb-3 fs-4">Upto 40% off</div>
                    <h2 class="banner-title display-1 fw-normal">Clearance sale !!!
                    </h2>
                    <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                        shop now
                        <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                            <use xlink:href="#arrow-right"></use>
                        </svg></a>
                </div>

            </div>
        </div>
    </section>

    <section id="testimonial">
        <div class="container my-5 py-5">
            <div class="row">
                <div class="offset-md-1 col-md-10">
                    <div class="swiper testimonial-swiper">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="row ">
                                    <div class="col-2">
                                        <iconify-icon icon="ri:double-quotes-l"
                                            class="quote-icon text-primary"></iconify-icon>
                                    </div>
                                    <div class="col-md-10 mt-md-5 p-5 pt-0 pt-md-5">
                                        <p class="testimonial-content fs-2">At the core of our practice is the idea
                                            that cities are the
                                            incubators of our
                                            greatest achievements, and the best hope for a sustainable future.</p>
                                        <p class="text-black">- Joshima Lin</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row ">
                                    <div class="col-2">
                                        <iconify-icon icon="ri:double-quotes-l"
                                            class="quote-icon text-primary"></iconify-icon>
                                    </div>
                                    <div class="col-md-10 mt-md-5 p-5 pt-0 pt-md-5">
                                        <p class="testimonial-content fs-2">At the core of our practice is the idea
                                            that cities are the
                                            incubators of our
                                            greatest achievements, and the best hope for a sustainable future.</p>
                                        <p class="text-black">- Joshima Lin</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row ">
                                    <div class="col-2">
                                        <iconify-icon icon="ri:double-quotes-l"
                                            class="quote-icon text-primary"></iconify-icon>
                                    </div>
                                    <div class="col-md-10 mt-md-5 p-5 pt-0 pt-md-5">
                                        <p class="testimonial-content fs-2">At the core of our practice is the idea
                                            that cities are the
                                            incubators of our
                                            greatest achievements, and the best hope for a sustainable future.</p>
                                        <p class="text-black">- Joshima Lin</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="swiper-pagination"></div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="bestselling" class="my-5 overflow-hidden">
        <div class="container py-5 mb-5">

            <div class="section-header d-md-flex justify-content-between align-items-center mb-3">
                <h2 class="display-3 fw-normal">Best selling products</h2>
                <div>
                    <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                        shop now
                        <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                            <use xlink:href="#arrow-right"></use>
                        </svg></a>
                </div>
            </div>

            <div class=" swiper bestselling-swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
              New
            </div> -->
                        <div class="card position-relative">
                            <a href="single-product.html"><img src="images/item5.jpg" class="img-fluid rounded-4"
                                    alt="image"></a>
                            <div class="card-body p-0">
                                <a href="single-product.html">
                                    <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                                </a>

                                <div class="card-text">
                                    <span class="rating secondary-font">
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        5.0</span>

                                    <h3 class="secondary-font text-primary">$18.00</h3>

                                    <div class="d-flex flex-wrap mt-3">
                                        <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                            <h5 class="text-uppercase m-0">Add to Cart</h5>
                                        </a>
                                        <a href="#" class="btn-wishlist px-4 pt-3 ">
                                            <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                        </a>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
              New
            </div> -->
                        <div class="card position-relative">
                            <a href="single-product.html"><img src="images/item6.jpg" class="img-fluid rounded-4"
                                    alt="image"></a>
                            <div class="card-body p-0">
                                <a href="single-product.html">
                                    <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                                </a>

                                <div class="card-text">
                                    <span class="rating secondary-font">
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        5.0</span>

                                    <h3 class="secondary-font text-primary">$18.00</h3>

                                    <div class="d-flex flex-wrap mt-3">
                                        <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                            <h5 class="text-uppercase m-0">Add to Cart</h5>
                                        </a>
                                        <a href="#" class="btn-wishlist px-4 pt-3 ">
                                            <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                        </a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
                            Sale
                        </div>
                        <div class="card position-relative">
                            <a href="single-product.html"><img src="images/item7.jpg" class="img-fluid rounded-4"
                                    alt="image"></a>
                            <div class="card-body p-0">
                                <a href="single-product.html">
                                    <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                                </a>

                                <div class="card-text">
                                    <span class="rating secondary-font">
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        5.0</span>

                                    <h3 class="secondary-font text-primary">$18.00</h3>

                                    <div class="d-flex flex-wrap mt-3">
                                        <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                            <h5 class="text-uppercase m-0">Add to Cart</h5>
                                        </a>
                                        <a href="#" class="btn-wishlist px-4 pt-3 ">
                                            <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                        </a>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
              New
            </div> -->
                        <div class="card position-relative">
                            <a href="single-product.html"><img src="images/item8.jpg" class="img-fluid rounded-4"
                                    alt="image"></a>
                            <div class="card-body p-0">
                                <a href="single-product.html">
                                    <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                                </a>

                                <div class="card-text">
                                    <span class="rating secondary-font">
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        5.0</span>

                                    <h3 class="secondary-font text-primary">$18.00</h3>

                                    <div class="d-flex flex-wrap mt-3">
                                        <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                            <h5 class="text-uppercase m-0">Add to Cart</h5>
                                        </a>
                                        <a href="#" class="btn-wishlist px-4 pt-3 ">
                                            <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                        </a>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
                            -10%
                        </div>
                        <div class="card position-relative">
                            <a href="single-product.html"><img src="images/item3.jpg" class="img-fluid rounded-4"
                                    alt="image"></a>
                            <div class="card-body p-0">
                                <a href="single-product.html">
                                    <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                                </a>

                                <div class="card-text">
                                    <span class="rating secondary-font">
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        5.0</span>

                                    <h3 class="secondary-font text-primary">$18.00</h3>

                                    <div class="d-flex flex-wrap mt-3">
                                        <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                            <h5 class="text-uppercase m-0">Add to Cart</h5>
                                        </a>
                                        <a href="#" class="btn-wishlist px-4 pt-3 ">
                                            <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                        </a>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
              New
            </div> -->
                        <div class="card position-relative">
                            <a href="single-product.html"><img src="images/item4.jpg" class="img-fluid rounded-4"
                                    alt="image"></a>
                            <div class="card-body p-0">
                                <a href="single-product.html">
                                    <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                                </a>

                                <div class="card-text">
                                    <span class="rating secondary-font">
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                        5.0</span>

                                    <h3 class="secondary-font text-primary">$18.00</h3>

                                    <div class="d-flex flex-wrap mt-3">
                                        <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                            <h5 class="text-uppercase m-0">Add to Cart</h5>
                                        </a>
                                        <a href="#" class="btn-wishlist px-4 pt-3 ">
                                            <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                        </a>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- / category-carousel -->


        </div>
    </section>

    <section id="register" style="background: url('images/background-img.png') no-repeat;">
        <div class="container ">
            <div class="row my-5 py-5">
                <div class="offset-md-3 col-md-6 my-5 ">
                    <h2 class="display-3 fw-normal text-center">Get 20% Off on <span class="text-primary">first
                            Purchase</span>
                    </h2>
                    <form>
                        <div class="mb-3">
                            <input type="email" class="form-control form-control-lg" name="email" id="email"
                                placeholder="Enter Your Email Address">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control form-control-lg" name="email"
                                id="password1" placeholder="Create Password">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control form-control-lg" name="email"
                                id="password2" placeholder="Repeat Password">
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-dark btn-lg rounded-1">Register it now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="latest-blog" class="my-5">
        <div class="container py-5 my-5">
            <div class="row mt-5">
                <div class="section-header d-md-flex justify-content-between align-items-center mb-3">
                    <h2 class="display-3 fw-normal">Latest Blog Post</h2>
                    <div>
                        <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                            Read all
                            <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                                <use xlink:href="#arrow-right"></use>
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 my-4 my-md-0">
                    <div class="z-1 position-absolute rounded-3 m-2 px-3 pt-1 bg-light">
                        <h3 class="secondary-font text-primary m-0">20</h3>
                        <p class="secondary-font fs-6 m-0">Feb</p>

                    </div>
                    <div class="card position-relative">
                        <a href="single-post.html"><img src="images/blog1.jpg" class="img-fluid rounded-4"
                                alt="image"></a>
                        <div class="card-body p-0">
                            <a href="single-post.html">
                                <h3 class="card-title pt-4 pb-3 m-0">10 Reasons to be helpful towards any animals</h3>
                            </a>

                            <div class="card-text">
                                <p class="blog-paragraph fs-6">At the core of our practice is the idea that cities are
                                    the incubators of
                                    our greatest
                                    achievements, and the best hope for a sustainable future.</p>
                                <a href="single-post.html" class="blog-read">read more</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-4 my-md-0">
                    <div class="z-1 position-absolute rounded-3 m-2 px-3 pt-1 bg-light">
                        <h3 class="secondary-font text-primary m-0">21</h3>
                        <p class="secondary-font fs-6 m-0">Feb</p>

                    </div>
                    <div class="card position-relative">
                        <a href="single-post.html"><img src="images/blog2.jpg" class="img-fluid rounded-4"
                                alt="image"></a>
                        <div class="card-body p-0">
                            <a href="single-post.html">
                                <h3 class="card-title pt-4 pb-3 m-0">How to know your pet is hungry</h3>
                            </a>

                            <div class="card-text">
                                <p class="blog-paragraph fs-6">At the core of our practice is the idea that cities are
                                    the incubators of
                                    our greatest
                                    achievements, and the best hope for a sustainable future.</p>
                                <a href="single-post.html" class="blog-read">read more</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-4 my-md-0">
                    <div class="z-1 position-absolute rounded-3 m-2 px-3 pt-1 bg-light">
                        <h3 class="secondary-font text-primary m-0">22</h3>
                        <p class="secondary-font fs-6 m-0">Feb</p>

                    </div>
                    <div class="card position-relative">
                        <a href="single-post.html"><img src="images/blog3.jpg" class="img-fluid rounded-4"
                                alt="image"></a>
                        <div class="card-body p-0">
                            <a href="single-post.html">
                                <h3 class="card-title pt-4 pb-3 m-0">Best home for your pets</h3>
                            </a>

                            <div class="card-text">
                                <p class="blog-paragraph fs-6">At the core of our practice is the idea that cities are
                                    the incubators of
                                    our greatest
                                    achievements, and the best hope for a sustainable future.</p>
                                <a href="single-post.html" class="blog-read">read more</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="service">
        <div class="container py-5 my-5">
            <div class="row g-md-5 pt-4">
                <div class="col-md-3 my-3">
                    <div class="card">
                        <div>
                            <iconify-icon class="service-icon text-primary" icon="la:shopping-cart"></iconify-icon>
                        </div>
                        <h3 class="card-title py-2 m-0">Free Delivery</h3>
                        <div class="card-text">
                            <p class="blog-paragraph fs-6">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <div class="card">
                        <div>
                            <iconify-icon class="service-icon text-primary" icon="la:user-check"></iconify-icon>
                        </div>
                        <h3 class="card-title py-2 m-0">100% secure payment</h3>
                        <div class="card-text">
                            <p class="blog-paragraph fs-6">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <div class="card">
                        <div>
                            <iconify-icon class="service-icon text-primary" icon="la:tag"></iconify-icon>
                        </div>
                        <h3 class="card-title py-2 m-0">Daily Offer</h3>
                        <div class="card-text">
                            <p class="blog-paragraph fs-6">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <div class="card">
                        <div>
                            <iconify-icon class="service-icon text-primary" icon="la:award"></iconify-icon>
                        </div>
                        <h3 class="card-title py-2 m-0">Quality guarantee</h3>
                        <div class="card-text">
                            <p class="blog-paragraph fs-6">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="insta" class="my-5">
        <div class="row g-0 py-5">
            <div class="col instagram-item  text-center position-relative">
                <div class="icon-overlay d-flex justify-content-center position-absolute">
                    <iconify-icon class="text-white" icon="la:instagram"></iconify-icon>
                </div>
                <a href="#">
                    <img src="images/insta1.jpg" alt="insta-img" class="img-fluid rounded-3">
                </a>
            </div>
            <div class="col instagram-item  text-center position-relative">
                <div class="icon-overlay d-flex justify-content-center position-absolute">
                    <iconify-icon class="text-white" icon="la:instagram"></iconify-icon>
                </div>
                <a href="#">
                    <img src="images/insta2.jpg" alt="insta-img" class="img-fluid rounded-3">
                </a>
            </div>
            <div class="col instagram-item  text-center position-relative">
                <div class="icon-overlay d-flex justify-content-center position-absolute">
                    <iconify-icon class="text-white" icon="la:instagram"></iconify-icon>
                </div>
                <a href="#">
                    <img src="images/insta3.jpg" alt="insta-img" class="img-fluid rounded-3">
                </a>
            </div>
            <div class="col instagram-item  text-center position-relative">
                <div class="icon-overlay d-flex justify-content-center position-absolute">
                    <iconify-icon class="text-white" icon="la:instagram"></iconify-icon>
                </div>
                <a href="#">
                    <img src="images/insta4.jpg" alt="insta-img" class="img-fluid rounded-3">
                </a>
            </div>
            <div class="col instagram-item  text-center position-relative">
                <div class="icon-overlay d-flex justify-content-center position-absolute">
                    <iconify-icon class="text-white" icon="la:instagram"></iconify-icon>
                </div>
                <a href="#">
                    <img src="images/insta5.jpg" alt="insta-img" class="img-fluid rounded-3">
                </a>
            </div>
            <div class="col instagram-item  text-center position-relative">
                <div class="icon-overlay d-flex justify-content-center position-absolute">
                    <iconify-icon class="text-white" icon="la:instagram"></iconify-icon>
                </div>
                <a href="#">
                    <img src="images/insta6.jpg" alt="insta-img" class="img-fluid rounded-3">
                </a>
            </div>
        </div>
    </section>

    <footer id="footer" class="my-5">
        <div class="container py-5 my-5">
            <div class="row">

                <div class="col-md-3">
                    <div class="footer-menu">
                        <img src="images/logo.png" alt="logo">
                        <p class="blog-paragraph fs-6 mt-3">Subscribe to our newsletter to get updates about our grand
                            offers.</p>
                        <div class="social-links">
                            <ul class="d-flex list-unstyled gap-2">
                                <li class="social">
                                    <a href="#">
                                        <iconify-icon class="social-icon" icon="ri:facebook-fill"></iconify-icon>
                                    </a>
                                </li>
                                <li class="social">
                                    <a href="#">
                                        <iconify-icon class="social-icon" icon="ri:twitter-fill"></iconify-icon>
                                    </a>
                                </li>
                                <li class="social">
                                    <a href="#">
                                        <iconify-icon class="social-icon" icon="ri:pinterest-fill"></iconify-icon>
                                    </a>
                                </li>
                                <li class="social">
                                    <a href="#">
                                        <iconify-icon class="social-icon" icon="ri:instagram-fill"></iconify-icon>
                                    </a>
                                </li>
                                <li class="social">
                                    <a href="#">
                                        <iconify-icon class="social-icon" icon="ri:youtube-fill"></iconify-icon>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-menu">
                        <h3>Quick Links</h3>
                        <ul class="menu-list list-unstyled">
                            <li class="menu-item">
                                <a href="#" class="nav-link">Home</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="nav-link">About us</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="nav-link">Offer </a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="nav-link">Services</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="nav-link">Conatct Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-menu">
                        <h3>Help Center</h5>
                            <ul class="menu-list list-unstyled">
                                <li class="menu-item">
                                    <a href="#" class="nav-link">FAQs</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="nav-link">Payment</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="nav-link">Returns & Refunds</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="nav-link">Checkout</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="nav-link">Delivery Information</a>
                                </li>
                            </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <h3>Our Newsletter</h3>
                        <p class="blog-paragraph fs-6">Subscribe to our newsletter to get updates about our grand
                            offers.</p>
                        <div class="search-bar border rounded-pill border-dark-subtle px-2">
                            <form class="text-center d-flex align-items-center" action="" method="">
                                <input type="text" class="form-control border-0 bg-transparent"
                                    placeholder="Enter your email here" />
                                <iconify-icon class="send-icon" icon="tabler:location-filled"></iconify-icon>
                            </form>
                        </div>
                    </div>
                </div>

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
                    <p class="secondary-font">Free HTML Template by <a href="https://templatesjungle.com/"
                            target="_blank" class="text-decoration-underline fw-bold text-black-50">
                            TemplatesJungle</a> </p>
                    <p class="secondary-font">Distributed by <a href="https://themewagon.com/" target="_blank"
                            class="text-decoration-underline fw-bold text-black-50"> ThemeWagon</a> </p>
                </div>
            </div>
        </div>
    </div>


    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>
