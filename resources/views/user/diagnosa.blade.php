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
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #FAFCFF">
        <div class="empty-2-2 container mx-auto d-flex align-items-center justify-content-center flex-column"
            style="font-family: 'Poppins', sans-serif;">

            <div class="row mb-4">
                <h1 class="title-text">Diagnosa Penyakit Tifus</h1>
            </div>

            <div class="row diagnosa">
                <form action="{{ route('process.diagnosa') }}" method="POST">
                    @csrf

                    @foreach ($gejala as $item)
                        <div class="form-group card p-4 mb-4" style="border-radius: 20px">
                            <label for="{{ $item->kode_gejala }}">{{ $item->pertanyaan }}</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gejala[{{ $item->kode_gejala }}]"
                                    value="{{ $item->kode_gejala }}" id="{{ $item->kode_gejala }}_ya">
                                <label class="form-check-label" for="{{ $item->kode_gejala }}_ya">Iya</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gejala[{{ $item->kode_gejala }}]"
                                    value="0" id="{{ $item->kode_gejala }}_tidak">
                                <label class="form-check-label" for="{{ $item->kode_gejala }}_tidak">Tidak</label>
                            </div>
                        </div>
                    @endforeach

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-back text-white mt-2">Diagnosa</button>
                    </div>
                </form>
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
