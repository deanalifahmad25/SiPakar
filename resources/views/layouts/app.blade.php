<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="SiPakar Dashboard Page" />
    <meta name="keywords" content="HTML, CSS, JavaScript, Bootstrap, Chart JS" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Dean | @deanalifahmad" />

    <title>Dashboard {{ config('app.name') }} - Solusi Baru Diagnosa Tifus dengan Cepat</title>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/icon sipakar.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('assets/images/icon sipakar.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <!-- External CSS -->
    <link rel="stylesheet" href="assets/styles/styles.css" type="text/css" media="screen" />

    <!-- CDN Fontawesome -->
    <script src="https://kit.fontawesome.com/32f82e1dca.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Nav Sidebar -->
    @include('layouts.sidebar')

    <!-- Main Content -->
    <main class="content">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div>
                    <button class="sidebarCollapseDefault btn p-0 border-0 d-none d-md-block"
                        aria-label="Hamburger Button">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <button data-bs-toggle="offcanvas" data-bs-target=".sidebar" aria-controls="sidebar"
                        aria-label="Hamburger Button" class="sidebarCollapseMobile btn p-0 border-0 d-block d-md-none">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
                <div class="d-flex align-items-center justify-content-end gap-4">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

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
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                    <img src="{{ asset('assets/images/avatar.jpg') }}" alt="{{ Auth::user()->name }} Photo Profile" class="avatar" />
                </div>
            </div>
        </nav>

        <section class="p-3">
            <header>
                <h3>Overview</h3>
                <p>Manage data for growth</p>
            </header>
            <div class="information d-flex flex-column gap-5">
                <div class="row px-1 mb-2 gap-5">
                    <div class="col-xl-4 col-12 card debit">
                        <img src="{{ asset('assets/images/ic_card.svg' )}}" alt="Debit" width="54px" />
                        <p class="number">•••• &nbsp;&nbsp; 2208 &nbsp;&nbsp; 1996</p>
                        <div>
                            <p class="fw-semibold m-0">Shayna Qowy</p>
                            <p class="fw-light m-0">20/24</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12 card balance">
                        <p>My Balance</p>
                        <h2>$90,500,000</h2>
                        <div>
                            <p class="m-0 fw-bold">+22%</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12 card donut-chart m-lg-0 p-2">
                        <div>
                            <canvas id="chart-budget" style="height: 226px; width: 100%">
                            </canvas>
                        </div>
                    </div>
                </div>
                <div class="row px-1 d-flex justify-content-between">
                    <div class="col-xl-6 col-12 p-0 mb-5 mb-xl-0 revenue">
                        <h5>Revenue Past 6 Months</h5>
                        <div>
                            <canvas id="chart-revenue" width="100%"></canvas>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12 p-0 ps-xl-4 transaction">
                        <h5>Latest Transactions</h5>
                        <div class="d-flex flex-column gap-4">
                            <div class="d-flex flex-row gap-3">
                                <div class="icon-history">
                                    <img src="{{ asset('assets/images/ic_spotify.svg') }}" width="32" height="32" />
                                </div>
                                <div class="trans-history flex-fill">
                                    <div>
                                        <p class="m-0 title">Spotify</p>
                                        <p class="m-0 date">12 Jan</p>
                                    </div>
                                    <p class="m-0 outcome">- $20,000</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row gap-3">
                                <div class="icon-history">
                                    <img src="{{ asset('assets/images/ic_receive_act.svg') }}" width="32" height="32" />
                                </div>
                                <div class="trans-history flex-fill">
                                    <div>
                                        <p class="m-0 title">Top Up BCA</p>
                                        <p class="m-0 date">12 Jan</p>
                                    </div>
                                    <p class="m-0 income">+ $120,000</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row gap-3">
                                <div class="icon-history">
                                    <img src="{{ asset('assets/images/ic_send_act.svg') }}" width="32" height="32" />
                                </div>
                                <div class="trans-history flex-fill">
                                    <div>
                                        <p class="title m-0">Send to @anggapro</p>
                                        <p class="date m-0">12 Jan</p>
                                    </div>
                                    <p class="outcome m-0">- $6,000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="assets/js/donut_chart.js"></script>
    <script src="assets/js/line_chart.js"></script>

    <script>
        $(document).ready(function() {
            $('.sidebarCollapseDefault').on('click', function() {
                $('.sidebar').toggleClass('active');
                $('.content').toggleClass('active');
            });
        });
    </script>
</body>

</html>
