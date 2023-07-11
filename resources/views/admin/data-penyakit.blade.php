<x-app-layout>
    <section class="p-3">
        <div class="information d-flex flex-column gap-5">
            <div class="row px-1">
                <h5>Data Penyakit</h5>
                <div class="wrapper">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th scope="col" style="border-radius: 10px 0 0 0;">Kode Penyakit</th>
                                    <th scope="col">Nama Penyakit</th>
                                    <th scope="col">Deskripsi Penyakit</th>
                                    <th scope="col" style="border-radius: 0 10px 0 0;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $penyakit)
                                    <tr>
                                        <th scope="row">{{ $penyakit->kode_penyakit }}</th>
                                        <th>{{ $penyakit->nama_penyakit }}</td>
                                        <td>{{ $penyakit->deskripsi_penyakit }}</td>
                                        <th>
                                            <a href="" class="edit" title="Edit" data-toggle="tooltip"><i
                                                    class="material-icons">&#xE254;</i></a>
                                            <a href="" class="delete" title="Delete" data-toggle="tooltip"><i
                                                    class="material-icons">&#xE872;</i></a>
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
                                Tabel Data Penyakit
                            </caption>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
