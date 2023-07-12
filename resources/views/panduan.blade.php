<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Panduan Pengguna SiPakar</title>

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
                                    <li class="nav-item position-relative">
                                        <a href="/" class="nav-link">Beranda</a>
                                    </li>
                                    <li class="nav-item active position-relative">
                                        <a href="" class="nav-link" style="color: #0D63F5;">Panduan</a>
                                    </li>
                                    <li class="nav-item position-relative">
                                        <a href="https://deanalifahmad.github.io/" class="nav-link">Kontak</a>
                                    </li>
                                    <li class="nav-item position-relative">
                                        <a href="/" class="nav-link">Tentang Kami</a>
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
                        <li class="nav-item position-relative">
                            <a href="/" class="nav-link">Beranda</a>
                        </li>
                        <li class="nav-item active position-relative">
                            <a href="" class="nav-link" style="color: #0D63F5;">Panduan</a>
                        </li>
                        <li class="nav-item position-relative">
                            <a href="https://deanalifahmad.github.io/" class="nav-link" href="#">Kontak</a>
                        </li>
                        <li class="nav-item position-relative">
                            <a href="/" class="nav-link">Tentang Kami</a>
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
        </div>
    </section>

    <section class="h1-00 w-100" style="box-sizing: border-box; background-color: #FAFCFF;">
        <div class="content-3-2 container-xxl mx-auto  position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="d-flex flex-lg-row flex-column align-items-center">
                <!-- Left Column -->
                <div class="img-hero text-center justify-content-center d-flex">
                    <img id="hero" class="img-fluid" src="{{ asset('./assets/images/Content3-1.png') }}"
                        alt="" />
                </div>

                <!-- Right Column -->
                <div
                    class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
                    <h2 class="title-text">Panduan <span style="color: #0D63F5">Pengguna</span></h2>
                    <ul style="padding: 0; margin: 0">
                        <li class="list-unstyled" style="margin-bottom: 2rem">
                            <h4
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span class="circle text-white d-flex align-items-center justify-content-center">
                                    1
                                </span>
                                Daftar Akun
                            </h4>
                            <p class="text-caption">
                                Silahkan melakukan daftar akun anda terlebih dahulu<br class="d-sm-inline d-none" />
                                menggunakan email valid.
                            </p>
                        </li>
                        <li class="list-unstyled" style="margin-bottom: 2rem">
                            <h4
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span class="circle text-white d-flex align-items-center justify-content-center">
                                    2
                                </span>
                                Masuk
                            </h4>
                            <p class="text-caption">
                                Setelah melakukan daftar akun, silahkan masuk<br class="d-sm-inline d-none" />
                                menggunakan akun yang sudah terdaftar.
                            </p>
                        </li>
                        <li class="list-unstyled" style="margin-bottom: 2rem">
                            <h4
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span class="circle text-white d-flex align-items-center justify-content-center">
                                    3
                                </span>
                                Basis Informasi
                            </h4>
                            <p class="text-caption">
                                Anda dapat melihat daftar informasi gejala dari<br class="d-sm-inline d-none" />
                                penyakit tifus yang tersedia.
                            </p>
                        </li>
                        <li class="list-unstyled" style="margin-bottom: 2rem">
                            <h4
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span class="circle text-white d-flex align-items-center justify-content-center">
                                    4
                                </span>
                                Diagnosa
                            </h4>
                            <p class="text-caption">
                                Silahkan lakukan diagnosa, jawablah pertanyaan gejala<br class="d-sm-inline d-none" />
                                yang tersedia sesuai dengan keluhan anda.
                            </p>
                        </li>
                        <li class="list-unstyled" style="margin-bottom: 3rem">
                            <h4
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span class="circle text-white d-flex align-items-center justify-content-center">
                                    5
                                </span>
                                Hasil Diagnosa
                            </h4>
                            <p class="text-caption">
                                Lihat hasil diagnosa berdasarkan gejala yang anda alami,<br
                                    class="d-sm-inline d-none" />
                                konsultasi lebih lanjut dengan dokter.
                            </p>
                        </li>
                    </ul>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ route('diagnosa') }}" class="btn btn-learn text-white">Mulai Diagnosa</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-learn text-white">Mulai Diagnosa</a>
                        @endauth
                    @endif
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
