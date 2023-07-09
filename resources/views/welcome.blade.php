<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Solusi Baru Diagnosa Tifus dengan Cepat</title>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/icon sipakar.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('assets/images/icon sipakar.png') }}">

    {{-- dep --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <!-- External CSS -->
    <link rel="stylesheet" href="assets/styles/styles.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/main.css') }}" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">

    <section class="h-100 w-100"
        style="
				box-sizing: border-box;
				position: relative;
				background-color: #FAFCFF;">

        <div class="header-3-3 container-fluid mx-auto p-0 position-relative"
            style="font-family: 'Poppins', sans-serif">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="/">
                    <img style="width: 140px; padding-top: 10px;" src="{{ asset('./assets/images/Logo SiPakar.png') }}"
                        alt="" />
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal"
                    data-bs-target="#targetModal-item">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
                    aria-labelledby="targetModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content bg-white border-0">
                            <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                                <a href="/" class="modal-title" id="targetModalLabel">
                                    <img style="width: 140px; margin-top: 0.5rem"
                                        src="{{ asset('./assets/images/Logo SiPakar.png') }}" alt="" />
                                </a>
                                <button type="button" class="close btn-close text-white" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                                    <li class="nav-item active position-relative">
                                        <a href="/" class="nav-link" style="color: #0D63F5;">Beranda</a>
                                    </li>
                                    <li class="nav-item position-relative">
                                        <a href="{{ route('panduan') }}" class="nav-link">Panduan</a>
                                    </li>
                                    <li class="nav-item position-relative">
                                        <a href="https://deanalifahmad.github.io/" class="nav-link">Kontak</a>
                                    </li>
                                    <li class="nav-item position-relative">
                                        <a href="#about" class="nav-link">Tentang Kami</a>
                                    </li>
                                </ul>
                            </div>
                            @if (Route::has('login'))
                                @auth
                                    <div class="modal-footer border-0" style="padding: 2rem; padding-top: 0.75rem">
                                        <a href="{{ route('dashboard') }}" class="btn btn-fill text-white">Dashboard</a>
                                    </div>
                                @else
                                    <div class="modal-footer border-0" style="padding: 2rem; padding-top: 0.75rem">
                                        <a href="{{ route('login') }}" class="btn btn-fill text-white">Masuk</a>
                                    </div>
                                @endauth
                            @endif

                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item active position-relative">
                            <a href="/" class="nav-link" style="color: #0D63F5;">Beranda</a>
                        </li>
                        <li class="nav-item position-relative">
                            <a href="{{ route('panduan') }}" class="nav-link">Panduan</a>
                        </li>
                        <li class="nav-item position-relative">
                            <a href="https://deanalifahmad.github.io/" class="nav-link" href="#">Kontak</a>
                        </li>
                        <li class="nav-item position-relative">
                            <a href="#about" class="nav-link">Tentang Kami</a>
                        </li>
                    </ul>
                    @if (Route::has('login'))
                        @auth
                            <div class="d-flex align-items-center justify-content-end gap-4">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                            <div>Hai {{ Auth::user()->name }}!</div>

                                            <div class="ml-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        @if (Auth::user()->hasRole('admin'))
                                            <x-dropdown-link :href="route('admin.dashboard')">
                                                {{ __('Dashboard') }}
                                            </x-dropdown-link>
                                        @else
                                            <x-dropdown-link :href="route('dashboard')">
                                                {{ __('Dashboard') }}
                                            </x-dropdown-link>
                                        @endif
                                        <x-dropdown-link :href="route('profile.edit')">
                                            {{ __('Profil') }}
                                        </x-dropdown-link>

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                {{ __('Logout') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                                @if (Auth::user()->avatar !== null)
                                    @if (Auth::user()->is_login_google == true)
                                        <img src="{{ Auth::user()->avatar }}"
                                            alt="{{ Auth::user()->name }} Photo Profile" class="avatar" />
                                    @else
                                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}"
                                            alt="{{ Auth::user()->name }} Photo Profile" class="avatar" />
                                    @endif
                                @else
                                    <img src="{{ asset('assets/images/default-avatar.jpg') }}"
                                        alt="{{ Auth::user()->name }} Photo Profile" class="avatar" />
                                @endif
                            </div>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-fill text-white">Masuk</a>
                        @endauth
                    @endif
                </div>
            </nav>

            <div class="hr">
                <hr
                    style="
                        border-color: #F4F4F4;
                        background-color: #F4F4F4;
                        opacity: 1;
                        margin: 0 !important;
                    " />
            </div>

            <div class="mx-auto d-flex flex-lg-row flex-column hero">
                <!-- Left Column -->
                <div
                    class="left-column flex-lg-grow-1 d-flex flex-column align-items-lg-start text-lg-start align-items-center text-center">
                    <h1 class="title-text-big">

                        Solusi Baru<br class="d-lg-block d-none" />
                        <span style="color: #0D63F5">Diagnosa Tifus</span><br class="d-lg-block d-none" />
                        dengan Cepat
                    </h1>
                    <p class="text-caption">
                        Dapatkan diagnosa tifus dengan sistem pakar kami!<br class="d-sm-block d-none" />
                        Jangan biarkan penyakit tifus menguasai.

                    </p>
                    <div
                        class="d-flex flex-sm-row flex-column align-items-center mx-auto mx-lg-0 justify-content-center gap-3">
                        <a href="{{ route('register') }}" class="btn btn-get text-white d-inline-flex">
                            Daftar Sekarang
                        </a>
                        <a href="{{ route('panduan') }}" class="btn btn-outline">
                            <div class="d-flex align-items-center">
                                <svg class="me-2" width="20" height="18" viewBox="0 0 22 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 3.54515C9.27504 2.00127 6.99715 1.0625 4.5 1.0625C3.36043 1.0625 2.26653 1.258 1.25 1.61729V17.0548C2.26653 16.6955 3.36043 16.5 4.5 16.5C6.99715 16.5 9.27504 17.4388 11 18.9827M11 3.54515C12.725 2.00127 15.0028 1.0625 17.5 1.0625C18.6396 1.0625 19.7335 1.258 20.75 1.61729V17.0548C19.7335 16.6955 18.6396 16.5 17.5 16.5C15.0028 16.5 12.725 17.4388 11 18.9827M11 3.54515V18.9827"
                                        stroke="#0D63F5" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                Pelajari Lebih Lanjut
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="right-column d-flex justify-content-center justify-content-lg-start text-center pe-0">
                    <img class="position-absolute d-lg-block d-none" style="margin-top: 2rem; right: 0"
                        src="{{ asset('./assets/images/header image.png') }}" alt="" />
                    <img class="position-absolute d-lg-block d-none hero-right"
                        src="{{ asset('./assets/images/hero image.png') }}" alt="" />
                    <div class="d-flex align-items-end card-outer">
                        <div class="mx-auto d-flex flex-wrap align-items-center">
                            <div class="card border-0 position-relative d-flex flex-column">
                                <div class="d-flex align-items-center" style="margin-bottom: 1.25rem">
                                    <div>
                                        <img style="margin-right: 1rem"
                                            src="{{ asset('./assets/images/icon sipakar 70x70.png') }}"
                                            alt="" />
                                    </div>
                                    <div class="text-start">
                                        <p class="card-name">Klinik Charina Medistra</p>
                                        <p class="card-job">Klinik Umum</p>
                                    </div>
                                </div>
                                <div class="row text-start" style="margin-bottom: 1.25rem">
                                    <div class="col-6">
                                        <p class="card-price-left">5000+</p>
                                        <p class="card-caption">Pasien</p>
                                    </div>
                                    <div class="col-6 ps-0">
                                        <p class="card-price-right">100+</p>
                                        <p class="card-caption">Reviews</p>
                                    </div>
                                </div>
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ route('dashboard') }}" class="btn btn-hire text-white">
                                            Coba Diagnosa
                                        </a>
                                    @else
                                        <a href="{{ route('login') }}" class="btn btn-hire text-white">
                                            Coba Diagnosa
                                        </a>
                                    @endauth
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="famouly-brands">
        <div class="container">
            <div class="row brand">
                <div class="col-md-3 col-6 text-center my-md-auto">
                    <img src="https://cdn.worldvectorlogo.com/logos/laravel-wordmark-1.svg" alt=""
                        class="img-fluid">
                </div>
                <div class="col-md-3 col-6 text-center my-md-auto">
                    <img src="https://cdn.worldvectorlogo.com/logos/bootstrap-5.svg" alt=""
                        class="img-fluid">
                </div>
                <div class="col-md-3 col-6 text-center my-md-auto mt-5 mt-md-0">
                    <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/f_auto,q_auto/v1634020083/aloweb_assets/logo-header.png"
                        alt="" class="img-fluid">
                </div>
                <div class="col-md-3 col-6 text-center my-md-auto mt-5 mt-md-0">
                    <img src="https://cdn.worldvectorlogo.com/logos/google-2015.svg" alt=""
                        class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="adventages" id="about" style="background-color: #FAFCFF;">
        <div class="container">
            <div class="row mx-0 text-center d-block">
                <div class="headline">
                    Keunggulan
                    <span class="cl-light-blue font-red-hat-display">Sistem Pakar</span><br>
                    Diagnosa Tifus Kami
                </div>
            </div>
            <div class="value row mx-0 d-flex justify-content-center justify-content-md-between">
                <div class="card">
                    <div class="card-body p-0">
                        <img src="{{ asset('./assets/icons/Benefit 1.png') }}" alt="dolar" class="img-fluid">
                        <div class="card-desc">
                            <h4 class="card-title">Gratis dan Mudah Digunakan</h4>
                            <p class="card-text">Akses informasi kesehatan gratis dan mudah untuk bantu Anda.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-0">
                        <img src="{{ asset('./assets/icons/Benefit 2.png') }}" alt="dolar" class="img-fluid">
                        <div class="card-desc">
                            <h4 class="card-title">Keamanan Data Pasien Terjamin</h4>
                            <p class="card-text">Privasi pasien terjamin, data aman dengan langkah keamanan ketat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-0">
                        <img src="{{ asset('./assets/icons/Benefit 3.png') }}" alt="dolar" class="img-fluid">
                        <div class="card-desc">
                            <h4 class="card-title">Implementasi Teknologi Modern</h4>
                            <p class="card-text">Teknologi terkini untuk diagnosa akurat dan solusi kesehatan efektif.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="explore">
        <div class="pl-house">
            <div class="row text-content title pt-35 my-0 mx-0" id="header">
                <div class="col-md-9 px-md-0">
                    <h1 class="pb-1">
                        Segera Dapatkan Hasil Diagnosa
                    </h1>
                    <p class="pb-0 descript-explore">
                        Persiapkan diri Anda untuk memasuki dunia kesehatan yang lebih baik dan lebih cerdas.
                    </p>
                </div>
                @if (Route::has('login'))
                    @auth
                        <div class="col-md-3 mt-md-3">
                            <a href="{{ route('dashboard') }}" class="btn btn-get px-5 py-3 mt-0">Mulai Diagnosa</a>
                        </div>
                    @else
                        <div class="col-md-3 mt-md-3">
                            <a href="{{ route('login') }}" class="btn btn-get px-5 py-3 mt-0">Mulai Diagnosa</a>
                        </div>
                    @endauth
                @endif
            </div>
            <div class="row section scrolling-wrapper flex-row flex-nowrap mt-3 img-explore mx-2">
                <img src="{{ asset('./assets/images/gallery 1.png') }}" alt="image-1" class="img-fluid">
                <img src="{{ asset('./assets/images/gallery 2.png') }}" alt="image-2" class="img-fluid">
                <img src="{{ asset('./assets/images/gallery 3.png') }}" alt="image-3" class="img-fluid">
                <img src="{{ asset('./assets/images/gallery 4.png') }}" alt="image-4" class="img-fluid">
            </div>
        </div>
    </section>

    <section class="content text-center">
        <div class="container">
            <div class="row content">
                <div class="col-12 px-md-0 my-auto">
                    <div class="tagline">
                        PANDUAN
                    </div>
                    <div class="headline mt-3">
                        3-Langkah Mudah <br class="d-none d-md-block">
                        Mulai Diagnosa Diri Anda
                    </div>
                    <div class="row benefits">
                        <div class="col-md-4 mt-md-0">
                            <div class="rectangle mx-auto px-1">
                                <img src="{{ asset('assets/icons/Icon Steps 1.png') }}" alt="benefits-1"
                                    class="img-fluid">
                                <div class="headline-benefit">
                                    Buat Akun
                                </div>
                                <div class="subheadline-benefit mt-2">
                                    Lakukan registrasi akun <br class="d-none d-md-block">
                                    untuk mendapat akses
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5 mt-md-0">
                            <div class="rectangle mx-auto px-1">
                                <img src="{{ asset('assets/icons/Icon Steps 2.png') }}" alt="benefits-1"
                                    class="img-fluid">
                                <div class="headline-benefit">
                                    Lakukan Diagnosa
                                </div>
                                <div class="subheadline-benefit mt-2">
                                    Jawab pertanyaan diagnosa <br class="d-none d-md-block">
                                    yang telah kami siapkan
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5 mt-md-0">
                            <div class="rectangle mx-auto px-1">
                                <img src="{{ asset('assets/icons/Icon Steps 3.png') }}" alt="benefits-1"
                                    class="img-fluid">
                                <div class="headline-benefit">
                                    Lihat Hasil
                                </div>
                                <div class="subheadline-benefit mt-2">
                                    Hasil diagnosa dapat digunakan <br class="d-none d-md-block">
                                    untuk konsultasi lebih lanjut
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button-header">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ route('dashboard') }}" class="btn btn-started">Coba Diagnosa</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-started">Coba Diagnosa</a>
                            @endauth
                        @endif
                        <a href="{{ route('panduan') }}" class="btn btn-story ml-3">Lainnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="page-footer font-small blue">
        <div class="container text-md-left">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3 address">
                    <div class="logo font-red-hat-display">
                        <a href="#">
                            <img style="width: 160px;" src="{{ asset('./assets/images/Logo SiPakar -2-.png') }}"
                                alt="" />
                        </a>
                    </div>
                    <div class="social-media">
                        <a href="https://www.linkedin.com/in/dean-alif-ahmad-bb6a9a1aa/">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/dark/bi_linkedin.svg"
                                alt="linkedin" class="img-fluid mr-4">
                        </a>
                        <a href="https://www.facebook.com/deanalif.ahmad/?locale=id_ID">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/dark/bi_facebook.svg"
                                alt="facebook" class="img-fluid mr-4">
                        </a>
                        <a href="https://twitter.com/deanalifah">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/dark/bi_twitter.svg"
                                alt="twitter" class="img-fluid mr-4">
                        </a>
                        <a href="https://www.instagram.com/deanalifahmad/">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/dark/bi_instagram.svg"
                                alt="twitch" class="img-fluid mr-4">
                        </a>
                    </div>
                    <div class="copyright font-red-hat-display">
                        2023 All rights reserved.
                    </div>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="row col-md-6 nav-footer mt-3">
                    <div class="col-md-4 mb-md-0 mb-3">
                    </div>
                    <div class="col-md-4 mb-md-0 mb-3">
                        <p>
                            Resources
                        </p>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://www.alodokter.com/">Blog</a>
                            </li>
                            <li>
                                <a href="https://goo.gl/maps/GgqeYqK8Z4f5NXUp8">Partnerships</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-3">
                        <p>
                            Our Company
                        </p>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://deanalifahmad.github.io/">About Us</a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/dean-alif-ahmad-bb6a9a1aa/">Careers</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- scripts --}}
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>
