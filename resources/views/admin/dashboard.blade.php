<x-app-layout>
    <section class="p-3">
        <header>
            <h3>Overview</h3>
            <p>Manage data for growth</p>
        </header>
        <div class="information d-flex flex-column gap-5">
            <div class="row px-1 mb-2 gap-5">
                <div class="col-xl-4 col-12 card debit">
                    <img src="{{ asset('assets/images/ic_card.svg') }}" alt="Debit" width="54px" />
                    <p class="number text-lg">{{ Auth::user()->name }}</p>
                    <div>
                        <p class="fw-semibold m-0 mb-2 text-sm">{{ Auth::user()->email }}</p>
                        <p class="fw-light m-0" style="font-size: 12px">Bergabung pada {{ date('d F Y', strtotime(Auth::user()->created_at)) }}</p>                    </div>
                </div>
                <div class="col-xl-4 col-12 card balance">
                    <p>Total</p>
                    <h2>{{ count($user) }}</h2>
                    <div>
                        <p class="m-0 fw-bold">Pengguna</p>
                    </div>
                </div>
                <div class="col-xl-4 col-12 card balance">
                    <p>Total</p>
                    <h2>{{ count($aturan) }}</h2>
                    <div>
                        <p class="m-0 fw-bold">Aturan</p>
                    </div>
                </div>
                {{-- <div class="col-xl-4 col-12 card donut-chart m-lg-0 p-2">
                    <div>
                        <canvas id="chart-budget" style="height: 226px; width: 100%">
                        </canvas>
                    </div>
                </div> --}}
            </div>
            <div class="row px-1 mb-2 gap-5">
                <div class="col-xl-4 col-12 card balance">
                    <p>Total</p>
                    <h2>{{ count($gejala) }}</h2>
                    <div>
                        <p class="m-0 fw-bold">Data Gejala</p>
                    </div>
                </div>
                <div class="col-xl-4 col-12 card balance">
                    <p>Total</p>
                    <h2>{{ count($penyakit) }}</h2>
                    <div>
                        <p class="m-0 fw-bold">Data Penyakit</p>
                    </div>
                </div>
                <div class="col-xl-4 col-12 card balance">
                    <p>Total</p>
                    <h2>{{ count($diagnosa) }}</h2>
                    <div>
                        <p class="m-0 fw-bold">Hasil Diagnosa</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
