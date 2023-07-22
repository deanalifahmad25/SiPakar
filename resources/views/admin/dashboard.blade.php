<x-app-layout>
    <section class="p-3">
        <header>
            <h3>Overview</h3>
            <p>Manage data for growth</p>
        </header>
        <div class="information d-flex flex-column gap-5">
            <div class="row px-1 mb-2 gap-5">
                <div class="col-xl-4 col-12 card debit">
                    <img src="{{ asset('assets/images/ic_card.svg') }}" alt="Debit" width="54px" />
                    <p class="number text-lg">{{ Auth::user()->name }}</p>
                    <div>
                        <p class="fw-semibold m-0 text-sm">{{ Auth::user()->email }}</p>
                        @if (Auth::user()->occupation !== null)
                            <p class="fw-light m-0">{{ Auth::user()->occupation }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-xl-4 col-12 card balance">
                    <p>My Balance</p>
                    <h2>$90,500,000</h2>
                    <div>
                        <p class="m-0 fw-bold">+22%</p>
                    </div>
                </div>
                <div class="col-xl-4 col-12 card donut-chart m-lg-0 p-2">
                    <div>
                        <canvas id="chart-budget" style="height: 226px; width: 100%">
                        </canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
