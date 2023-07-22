<x-app-layout>
    <section class="p-3">
        <div class="information d-flex flex-column gap-5">
            <div class="row px-1">
                <h5>Data Penyakit</h5>
                <div class="wrapper">
                    <form method="post" action="{{ route('admin.update.data-penyakit', $penyakit->id) }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div>
                            <x-input-label for="nama_penyakit" :value="__('Nama Penyakit')" />
                            <x-text-input id="nama_penyakit" name="nama_penyakit" type="text" class="mt-1 block w-full" value="{{ isset($penyakit) ? $penyakit->nama_penyakit : '' }}"
                                required autofocus autocomplete="nama_penyakit" />
                            <x-input-error class="mt-2" :messages="$errors->get('nama_penyakit')" />
                        </div>
                
                        <div>
                            <x-input-label for="deskripsi_penyakit" :value="__('Deskripsi Penyakit')" />
                            <x-text-input id="deskripsi_penyakit" name="deskripsi_penyakit" type="text" class="mt-1 block w-full" value="{{ isset($penyakit) ? $penyakit->deskripsi_penyakit : '' }}"
                                required autofocus autocomplete="deskripsi_penyakit" />
                            <x-input-error class="mt-2" :messages="$errors->get('deskripsi_penyakit')" />
                        </div>
                
                        <div>
                            <x-input-label for="solusi_penyakit" :value="__('Solusi Penyakit')" />
                            <x-text-input id="solusi_penyakit" name="solusi_penyakit" type="text" class="mt-1 block w-full" value="{{ isset($penyakit) ? $penyakit->solusi_penyakit : '' }}"
                                required autofocus autocomplete="solusi_penyakit" />
                            <x-input-error class="mt-2" :messages="$errors->get('solusi_penyakit')" />
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
