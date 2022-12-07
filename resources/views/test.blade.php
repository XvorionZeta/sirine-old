@extends('layout.app')
@section('tittle', 'Statistik Retur')
@section('content')
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    <div class="row">
                        <div class="col-4">
                            <div class="card">
                                <div class="card-header bg-info">
                                    <h3 class="text-white">Verifikasi PCHT</h3>
                                </div>
                                <div class="card-body text-right">
                                    <h3>{{ $count['pchtVerif'] }} OBC</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-header bg-info">
                                    <h3 class="text-white">Sisa PCHT</h3>
                                </div>
                                <div class="card-body text-right">
                                    <h3>{{ $count['pchtSisa'] }} OBC</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-header bg-info">
                                    <h3 class="text-white">Jatuh Tempo Terdekat Pcht</h3>
                                </div>
                                <div class="card-body text-right">
                                    <h3>{{ number_format($count['jtPchtSum']) }} Lbr</h3>
                                    <span>{{ $count['jtPchtDate'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="card">
                                <div class="card-header bg-success">
                                    <h3 class="text-white">Verifikasi MMEA</h3>
                                </div>
                                <div class="card-body text-right">
                                    <h3>{{ $count['mmeaVerif'] }} OBC</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-header bg-success">
                                    <h3 class="text-white">Sisa MMEA</h3>
                                </div>
                                <div class="card-body text-right">
                                    <h3>{{ $count['mmeaSisa'] }} OBC</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-header bg-success">
                                    <h3 class="text-white">Jatuh Tempo Terdekat Pcht</h3>
                                </div>
                                <div class="card-body text-right">
                                    <h3>{{ number_format($count['jtMmeaSum']) }} Lbr</h3>
                                    <span>{{ $count['jtMmeaDate'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
@section('script-js')
    @push('js')
        <script src="{{ asset('js/Chart/dashboard-adm.js') }}"></script>
    @endpush
@endsection
