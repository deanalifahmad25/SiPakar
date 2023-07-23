<x-app-layout>
    <section class="p-3">
        <div class="information d-flex flex-column gap-5">
            <div class="row px-1">
                <h5>Data Hasil Diagnosa Pengguna</h5>
                <div class="wrapper">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th scope="col" style="border-radius: 10px 0 0 0;">Kode Diagnosa</th>
                                    <th scope="col">Nama Pengguna</th>
                                    <th scope="col">Kode Penyakit</th>
                                    <th scope="col">Hasil Diagnosa</th>
                                    <th scope="col">Waktu</th>
                                    <th scope="col" style="border-radius: 0 10px 0 0;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $hasildiagnosa)
                                    <tr>
                                        <th scope="row">{{ $hasildiagnosa->kode_diagnosa }}</th>
                                        <th>{{ $hasildiagnosa->user->name }}</td>
                                        <th>{{ $hasildiagnosa->kode_penyakit }}</td>
                                        <th>{{ $hasildiagnosa->penyakit->nama_penyakit }}</td>
                                        <th>{{ date('d F Y', strtotime($hasildiagnosa->created_at)) }}</th>
                                        <th style="min-width: 80px;">
                                            <a href="{{ route('detail-diagnosa', $hasildiagnosa->id) }}" class="view"
                                                title="View" data-toggle="tooltip"><i
                                                    class="material-icons" style="color: #0D63F5">&#xe8b6;</i></a>
                                        </th>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan='6' style="text-align: center; font-weight: bold;">Tidak Ada Data
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>

                            <caption>
                                Tabel Data Hasil Diagnosa Pengguna
                            </caption>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
