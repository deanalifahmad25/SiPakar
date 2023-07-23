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
        .empty-2-2 .tittle-caption {
            font-size: 18px;
            font-weight: 500 !important;
        }

        .empty-2-2 table {
            border-radius: 20px !important;
        }

        .empty-2-2 table thead {
            background-color: #0D63F5;
            color: #ffffff;
        }

        .empty-2-2 table th {
            text-align: center;
        }

        .empty-2-2 table tbody {
            border: transparent;
        }

        .empty-2-2 table td {
            max-width: 400px;
            text-align: justify;
        }
    </style>

    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #FFFFFF">
        <div class="empty-2-2 container mx-auto d-flex align-items-center justify-content-center flex-column"
            style="font-family: 'Poppins', sans-serif;">

            <div class="row mb-2">
                <h1 class="title-text">Hasil Diagnosa</h1>
            </div>

            <div class="row diagnosa mb-4 mx-2">
                @if (!$penyakitBreadthFS)
                    <p>Tidak ditemukan penyakit berdasarkan gejala yang diinputkan.</p>
                @else
                    @if ($penyakitBreadthFS)
                        <p class="tittle-caption">Berdasarkan metode Breadth First Search, sistem mendiagnosa
                            kemungkinan:
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>
                                        <th scope="col" style="border-radius: 10px 0 0 0;">Kode Penyakit</th>
                                        <th scope="col">Nama Penyakit</th>
                                        <th scope="col">Deskripsi Penyakit</th>
                                        <th scope="col" style="border-radius: 0 10px 0 0;">Solusi Penyakit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $penyakitBreadthFS->kode_penyakit }}</th>
                                        <th>{{ $penyakitBreadthFS->nama_penyakit }}</td>
                                        <td>{{ $penyakitBreadthFS->deskripsi_penyakit }}</td>
                                        <td>{{ $penyakitBreadthFS->solusi_penyakit }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endif
                @endif
            </div>

            <div class="row diagnosa mx-2 mb-4">
                @if (!$penyakitBestFS)
                    <p>Tidak ditemukan penyakit berdasarkan gejala yang diinputkan.</p>
                @else
                    @if ($penyakitBestFS)
                        <p class="tittle-caption">Berdasarkan metode Best First Search, sistem mendiagnosa kemungkinan:
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" style="border-radius: 10px 0 0 0;">Kode Penyakit</th>
                                        <th scope="col">Nama Penyakit</th>
                                        <th scope="col">Deskripsi Penyakit</th>
                                        <th scope="col" style="border-radius: 0 10px 0 0;">Solusi Penyakit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $penyakitBestFS->kode_penyakit }}</th>
                                        <th>{{ $penyakitBestFS->nama_penyakit }}</td>
                                        <td>{{ $penyakitBestFS->deskripsi_penyakit }}</td>
                                        <td>{{ $penyakitBestFS->solusi_penyakit }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endif
                @endif
            </div>

            <div class="d-flex flex-sm-row flex-column align-items-center mx-auto mx-lg-0 justify-content-center gap-3">
                <a href="{{ route('dashboard') }}" class="btn btn-back text-white">Kembali</a>
                <a href="{{ route('diagnosa') }}" class="btn btn-back text-white">Diagnosa Ulang</a>
            </div>
        </div>
    </section>

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
