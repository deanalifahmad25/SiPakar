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
                    <p class="number">{{ Auth::user()->email }}</p>
                    <div>
                        <p class="fw-semibold m-0">{{ Auth::user()->name }}</p>
                        <p class="fw-light m-0">{{ Auth::user()->id }}</p>
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
            <div class="row px-1 d-flex justify-content-between">
                <div class="col-xl-6 col-12 p-0 mb-5 mb-xl-0 revenue">
                    <h5>Revenue Past 6 Months</h5>
                    <div>
                        <canvas id="chart-revenue" width="100%"></canvas>
                    </div>
                </div>
                <div class="col-xl-6 col-12 p-0 ps-xl-4 transaction">
                    <h5>Latest Transactions</h5>
                    <div class="d-flex flex-column gap-4">
                        <div class="d-flex flex-row gap-3">
                            <div class="icon-history">
                                <img src="{{ asset('assets/images/ic_spotify.svg') }}" width="32" height="32" />
                            </div>
                            <div class="trans-history flex-fill">
                                <div>
                                    <p class="m-0 title">Spotify</p>
                                    <p class="m-0 date">12 Jan</p>
                                </div>
                                <p class="m-0 outcome">- $20,000</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row gap-3">
                            <div class="icon-history">
                                <img src="{{ asset('assets/images/ic_receive_act.svg') }}" width="32"
                                    height="32" />
                            </div>
                            <div class="trans-history flex-fill">
                                <div>
                                    <p class="m-0 title">Top Up BCA</p>
                                    <p class="m-0 date">12 Jan</p>
                                </div>
                                <p class="m-0 income">+ $120,000</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row gap-3">
                            <div class="icon-history">
                                <img src="{{ asset('assets/images/ic_send_act.svg') }}" width="32" height="32" />
                            </div>
                            <div class="trans-history flex-fill">
                                <div>
                                    <p class="title m-0">Send to @anggapro</p>
                                    <p class="date m-0">12 Jan</p>
                                </div>
                                <p class="outcome m-0">- $6,000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row px-1">
                <h5>Riwayat Diagnosa</h5>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-borderless ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Lorem</th>
                                <th scope="col">Ipsum</th>
                                <th scope="col">Dolor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Sit</td>
                                <td>Amet</td>
                                <td>Consectetur</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Adipisicing</td>
                                <td>Elit</td>
                                <td>Sint</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Hic</td>
                                <td>Fugiat</td>
                                <td>Temporibus</td>
                            </tr>
                        </tbody>
    
                        <caption>
                            Captions of the table
                        </caption>
    
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
