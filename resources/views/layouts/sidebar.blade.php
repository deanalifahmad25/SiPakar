<!-- Nav Sidebar -->
<nav x-data="{ open: false }" class="sidebar offcanvas-md offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false">
    <div class="d-flex justify-content-end m-3 d-block d-md-none">
        <button aria-label="Close" data-bs-dismiss="offcanvas" data-bs-target=".sidebar" class="btn p-0 border-0 fs-4">
            <i class="fas fa-close"></i>
        </button>
    </div>
    <div class="d-flex justify-content-center mt-md-5 mb-4">
        <img src="{{ asset('assets/images/Logo SiPakar.png') }}" alt="Logo" width="140px" />
    </div>
    <div class="pt-2 d-flex flex-column gap-5">
        <div class="menu p-0">
            <p>Utama</p>
            <x-side-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <i class="icon ic-stats"></i>
                {{ __('Dashboard') }}
            </x-side-link>
            <x-side-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <i class="icon ic-trans"></i>
                {{ __('Data Penyakit') }}
            </x-side-link>
            <x-side-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <i class="icon ic-trans"></i>
                {{ __('Data Gejala') }}
            </x-side-link>
            <x-side-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <i class="icon ic-account"></i>
                {{ __('Basis Informasi') }}
            </x-side-link>
            <x-side-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <i class="icon ic-help"></i>
                {{ __('Aturan') }}
            </x-side-link>
        </div>
        <div class="menu">
            <p>Lainnya</p>
            <x-side-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <i class="icon ic-settings"></i>
                {{ __('Profil') }}
            </x-side-link>
            <x-side-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <i class="icon ic-msg"></i>
                {{ __('Panduan') }}
            </x-side-link>
            <x-side-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <i class="icon ic-logout"></i>
                {{ __('Logout') }}
            </x-side-link>
        </div>
    </div>
</nav>
