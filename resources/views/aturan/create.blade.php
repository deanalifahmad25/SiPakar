<x-app-layout>
    <section class="p-3">
        <div class="information d-flex flex-column gap-5">
            <div class="row px-1">
                <h5>Data Penyakit</h5>
                <div class="wrapper">
                    <form method="post" action="{{ route('admin.store.aturan') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <x-input-label for="keputusan" :value="__('Keputusan')" />
                                    <select name="keputusan"
                                        class="form-select form-select-md mt-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                        <option disabled>Pilih Keputusan</option>
                                        @foreach ($keputusan as $option)
                                            <option value="{{ $option->kode_keputusan }}">
                                                {{ $option->kode_keputusan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6">
                                    <x-input-label for="penyakit" :value="__('Penyakit')" />
                                    <select name="penyakit"
                                        class="form-select form-select-md mt-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                        <option disabled>Pilih Penyakit</option>
                                        @foreach ($penyakit as $option)
                                            <option value="{{ $option->nama_penyakit }}">
                                                {{ $option->nama_penyakit }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div>
                            <x-input-label for="kriteria_gejala" :value="__('Kriteria Gejala')" />
                            <x-text-input id="kriteria_gejala" name="kriteria_gejala" type="text"
                                class="mt-1 block w-full" required autofocus autocomplete="kriteria_gejala"
                                placeholder="Contoh: G001ANDG002ANDG003" />
                            <x-input-error class="mt-2" :messages="$errors->get('kriteria_gejala')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <button type="submit" class="btn btn-started" style="padding-bottom: 20px">Simpan</button>

                            @if (session('status') === 'profile-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
