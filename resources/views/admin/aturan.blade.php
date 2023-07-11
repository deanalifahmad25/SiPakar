<x-app-layout>
    <section class="p-3">
        <div class="information d-flex flex-column gap-5">
            <div class="row px-1">
                <h5>Aturan</h5>
                <div class="wrapper">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th scope="col" style="border-radius: 10px 0 0 0;">Kode Aturan</th>
                                    <th scope="col">Keputusan</th>
                                    <th scope="col">Penyakit</th>
                                    <th scope="col">Kriteria  Gejala</th>
                                    <th scope="col" style="border-radius: 0 10px 0 0;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $aturan)
                                    <tr>
                                        <th scope="row">{{ $aturan->kode_aturan }}</th>
                                        <th>{{ $aturan->keputusan }}</td>
                                        <th>{{ $aturan->penyakit }}</td>
                                        <td style="text-align: center">{{ $aturan->kriteria_gejala }}</td>
                                        <th>
                                            <a href="" class="edit" title="Edit" data-toggle="tooltip"><i
                                                    class="material-icons">&#xE254;</i></a>
                                            <a href="" class="delete" title="Delete" data-toggle="tooltip"><i
                                                    class="material-icons">&#xE872;</i></a>
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>

                            <caption>
                                Tabel Data Aturan
                            </caption>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
