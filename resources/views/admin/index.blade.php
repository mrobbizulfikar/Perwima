@extends('layouts.app')

@section('head')
@endsection

@section('content')
            <div class="content">
                <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-book-bookmark text-warning"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                            <p class="card-category">Koleksi Buku</p>
                            <p class="card-title">{{ $book->count() }}
                                <p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                        <i class="fa fa-calendar-o"></i> {{ $lastBook ? $lastBook->created_at : '-' }}
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-refresh-69 text-primary"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                            <p class="card-category">Transaksi</p>
                            <p class="card-title">{{ $transaction->count() }}
                                <p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                        <i class="fa fa-calendar-o"></i> {{ $lastTransaction ? $lastTransaction->created_at : '-' }}
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-money-coins text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                            <p class="card-category">Total Denda</p>
                            <p class="card-title">Rp{{ $transaction->sum('fine') }}
                                <p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                        <i class="nc-icon nc-alert-circle-i"></i> Rupiah
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-single-02 text-danger"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                            <p class="card-category">Pengguna</p>
                            <p class="card-title">{{ $user->count() }}
                                <p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                        <i class="fa fa-calendar-o"></i> {{ $lastUser ? $lastUser->created_at : '-' }}
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                    <div class="card-header ">
                        <h5 class="card-title">Users Behavior</h5>
                        <p class="card-category">24 Hours performance</p>
                    </div>
                    <div class="card-body ">
                        <canvas id=chartHours width="400" height="100"></canvas>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                        <i class="fa fa-history"></i> Updated 3 minutes ago
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-4">
                    <div class="card ">
                    <div class="card-header ">
                        <h5 class="card-title">Email Statistics</h5>
                        <p class="card-category">Last Campaign Performance</p>
                    </div>
                    <div class="card-body ">
                        <canvas id="chartEmail"></canvas>
                    </div>
                    <div class="card-footer ">
                        <div class="legend">
                        <i class="fa fa-circle text-primary"></i> Opened
                        <i class="fa fa-circle text-warning"></i> Read
                        <i class="fa fa-circle text-danger"></i> Deleted
                        <i class="fa fa-circle text-gray"></i> Unopened
                        </div>
                        <hr>
                        <div class="stats">
                        <i class="fa fa-calendar"></i> Number of emails sent
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card card-chart">
                    <div class="card-header">
                        <h5 class="card-title">NASDAQ: AAPL</h5>
                        <p class="card-category">Line Chart with Points</p>
                    </div>
                    <div class="card-body">
                        <canvas id="speedChart" width="400" height="100"></canvas>
                    </div>
                    <div class="card-footer">
                        <div class="chart-legend">
                        <i class="fa fa-circle text-info"></i> Tesla Model S
                        <i class="fa fa-circle text-warning"></i> BMW 5 Series
                        </div>
                        <hr/>
                        <div class="card-stats">
                        <i class="fa fa-check"></i> Data information certified
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
@endsection

@push('script')
@endpush