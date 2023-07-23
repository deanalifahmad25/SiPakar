<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}</title>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/icon sipakar.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('assets/images/icon sipakar.png') }}">

    {{-- dep --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/main.css') }}" />
</head>

<body>
    <style>
        body {
            font-family: Poppins, sans-serif !important;
            color: #16171C !important;
        }
    </style>
    <div class="card">
        <div class="card-body">
            <div class="container mb-5 mt-3">
                <div class="row d-flex align-items-baseline">
                    <div class="col-xl-9">
                        <p style="font-size: 20px; font-weight: 600;">Detail Diagnosa</p>
                    </div>
                    <div class="col-xl-3 float-end">
                        @if (Auth::user()->hasRole('admin'))
                            <a href="{{ route('admin.hasil-diagnosa') }}" class="btn btn-primary text-white" style="background-color: #0D63F5">Kembali</a>
                        @else
                            <a href="{{ route('dashboard') }}" class="btn btn-primary text-white" style="background-color: #0D63F5">Kembali</a>
                        @endif
                        <button class="btn btn-primary text-white" style="background-color: #0D63F5" onclick="window.print()">Cetak Hasil</button>
                    </div>
                    <hr>
                </div>

                <div class="container">
                    <div class="col-md-12">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/Logo SiPakar.png') }}" alt="Logo" width="140px" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-8">
                            <ul class="list-unstyled">
                                <li class="fw-bold"><span style="color:#0D63F5;">{{ $data->user->name }}</span></li>
                                <li class="fw-bold">{{ $data->user->city }}</li>
                                <li class="fw-bold">{{ $data->user->phone }}</li>
                            </ul>
                        </div>
                        <div class="col-xl-4">
                            <p>Detail Diagnosa</p>
                            <ul class="list-unstyled">
                                <li><span class="fw-bold">Kode: </span>{{ $data->kode_diagnosa }}</li>
                                <li><span class="fw-bold">Waktu: </span>{{ date('d F Y', strtotime($data->created_at)) }}</li>
                                <li><span class="me-1 fw-bold">Status:</span><span class="badge bg-primary text-black fw-bold" style="background-color: #0D63F5">Berhasil</span></li>
                            </ul>
                        </div>
                    </div>
    
                    <div class="row my-2 mx-1 justify-content-center">
                        <table class="table table-striped table-hover">
                            <thead style="background-color:#0D63F5 ;" class="text-white">
                                <tr class="text-center">
                                    <th scope="col" style="border-radius: 10px 0 0 0;">Kode Penyakit</th>
                                    <th scope="col">Nama Penyakit</th>
                                    <th scope="col">Deskripsi Penyakit</th>
                                    <th scope="col" style="border-radius: 0 10px 0 0;">Solusi Penyakit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-center" scope="row">{{ $data->kode_diagnosa }}</th>
                                    <th class="text-center">{{ $data->penyakit->kode_penyakit }}</th>
                                    <td>{{ $data->penyakit->deskripsi_penyakit }}</td>
                                    <td>{{ $data->penyakit->solusi_penyakit }}</td>
                                </tr>
                            </tbody>
    
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-xl-8">
                            <p class="ms-3">Hasil diagnosa dapat digunakan untuk melakukan konsultasi lebih lanjut.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xl-10">
                            <p>Terima kasih telah menggunakan sistem diagnosa website kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- scripts --}}
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