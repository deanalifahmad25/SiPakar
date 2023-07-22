<x-app-layout>
    <section class="p-3">
        <div class="information d-flex flex-column gap-5">
            <div class="row px-1">
                <h5>Aturan</h5>
                <div class="wrapper">
                    <a href="{{ route('admin.create.aturan') }}" class="btn btn-started mb-2">Tambah</a>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th scope="col" style="border-radius: 10px 0 0 0;">Kode Aturan</th>
                                    <th scope="col">Keputusan</th>
                                    <th scope="col">Penyakit</th>
                                    <th scope="col">Kriteria Gejala</th>
                                    <th scope="col" style="border-radius: 0 10px 0 0;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $aturan)
                                    <tr>
                                        <th scope="row">{{ $aturan->kode_aturan }}</th>
                                        <th>{{ $aturan->keputusan }}</td>
                                        <th>{{ $aturan->penyakit }}</td>
                                        <td style="text-align: center">{{ $aturan->kriteria_gejala }}</td>
                                        <th>
                                            <a href="{{ route('admin.edit.aturan', $aturan->id) }}" class="edit"
                                                title="Edit" data-toggle="tooltip"><i
                                                    class="material-icons">&#xE254;</i></a>
                                            <form method="post"
                                                action="{{ route('admin.delete.aturan', $aturan->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="delete" title="Delete"
                                                    data-toggle="tooltip"><i
                                                        class="material-icons">&#xE872;</i></button>
                                            </form>
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
                                Tabel Data Aturan
                            </caption>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
