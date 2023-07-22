<x-app-layout>
    <section class="p-3">
        <div class="information d-flex flex-column gap-5">
            <div class="row px-1">
                <h5>Data Gejala</h5>
                <div class="wrapper">
                    <a href="{{ route('admin.create.data-gejala') }}" class="btn btn-started mb-2">Tambah</a>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th scope="col" style="border-radius: 10px 0 0 0;">Kode Gejala</th>
                                    <th scope="col">Nama Gejala</th>
                                    <th scope="col">Deskripsi Gejala</th>
                                    <th scope="col">Pertanyaan</th>
                                    <th scope="col" style="border-radius: 0 10px 0 0;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $gejala)
                                    <tr>
                                        <th scope="row">{{ $gejala->kode_gejala }}</th>
                                        <th>{{ $gejala->nama_gejala }}</td>
                                        <td>{{ $gejala->deskripsi_gejala }}</td>
                                        <td>{{ $gejala->pertanyaan }}</td>
                                        <th style="min-width: 80px;">
                                            <a href="{{ route('admin.edit.data-gejala', $gejala->id) }}" class="edit"
                                                title="Edit" data-toggle="tooltip"><i
                                                    class="material-icons">&#xE254;</i></a>
                                            <form method="post"
                                                action="{{ route('admin.delete.data-gejala', $gejala->id) }}">
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
                                Tabel Data Gejala
                            </caption>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
