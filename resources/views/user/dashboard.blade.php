<x-app-layout>
    <section class="p-3">
        <header>
            <h3>Overview</h3>
            <p>Tentang anda</p>
        </header>
        <div class="information d-flex flex-column gap-5">
            <div class="row px-1 mb-2 gap-5">
                <div class="col-xl-4 col-12 card debit">
                    <img src="{{ asset('assets/images/ic_card.svg') }}" alt="Debit" width="54px" />
                    <p class="number text-lg">{{ Auth::user()->name }}</p>
                    <div>
                        <p class="fw-semibold m-0 mb-2 text-sm">{{ Auth::user()->email }}</p>
                        <p class="fw-light m-0" style="font-size: 12px">Bergabung pada {{ date('d F Y', strtotime(Auth::user()->created_at)) }}</p>
                    </div>
                </div>
            </div>

            <div class="row px-1">
                <h5>Riwayat Diagnosa</h5>
                <div class="wrapper">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-borderless ">
                            <thead>
                                <tr>
                                    <th scope="col" style="border-radius: 10px 0 0 0;">Kode Diagnosa</th>
                                    <th scope="col">Kode Penyakit</th>
                                    <th scope="col">Hasil Diagnosa</th>
                                    <th scope="col">Waktu</th>
                                    <th scope="col" style="border-radius: 0 10px 0 0;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $diagnosa)
                                    <tr>
                                        <th scope="row">{{ $diagnosa->kode_diagnosa }}</th>
                                        <th>{{ $diagnosa->kode_penyakit }}</td>
                                        <th>{{ $diagnosa->penyakit->nama_penyakit }}</td>
                                        <th>{{ date('d F Y', strtotime($diagnosa->created_at)) }}</th>
                                        <th>
                                            <a href="{{ route('detail-diagnosa', $diagnosa->id) }}" class="view"
                                                title="View" data-toggle="tooltip"><i
                                                    class="material-icons" style="color: #0D63F5">&#xe8b6;</i></a>
                                        </th>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan='6' style="text-align: center; font-weight: bold;">Belum Ada Data
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>

                            <caption>
                                Tabel Riwayat Diagnosa
                            </caption>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
