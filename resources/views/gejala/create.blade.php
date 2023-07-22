<x-app-layout>
    <section class="p-3">
        <div class="information d-flex flex-column gap-5">
            <div class="row px-1">
                <h5>Data Penyakit</h5>
                <div class="wrapper">
                    <form method="post" action="{{ route('admin.store.data-gejala') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <x-input-label for="nama_gejala" :value="__('Nama Gejala')" />
                            <x-text-input id="nama_gejala" name="nama_gejala" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="nama_gejala" />
                            <x-input-error class="mt-2" :messages="$errors->get('nama_gejala')" />
                        </div>
                
                        <div>
                            <x-input-label for="deskripsi_gejala" :value="__('Deskripsi Gejala')" />
                            <x-text-input id="deskripsi_gejala" name="deskripsi_gejala" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="deskripsi_gejala" />
                            <x-input-error class="mt-2" :messages="$errors->get('deskripsi_gejala')" />
                        </div>
                
                        <div>
                            <x-input-label for="pertanyaan" :value="__('Pertanyaan')" />
                            <x-text-input id="pertanyaan" name="pertanyaan" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="pertanyaan" />
                            <x-input-error class="mt-2" :messages="$errors->get('pertanyaan')" />
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
