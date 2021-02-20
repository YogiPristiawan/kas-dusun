
@extends('layouts.master')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-80">SALDO</h1>
    </div>

    <!-- Saldo  -->
    <div class="row text-center pt-5 saldo">
        <div class="container">
            <p>{{ 'Rp. ' . number_format($transaksi[0]->saldo, 2, ',', '.') }}</p>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col mt-5">
            <div class="card shadow mb-4 p-1">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Rincian Transaksi Terbaru</h6>
                </div>
                <!-- Card Body -->
                <div class="table-responsive-lg">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Saldo Awal</th>
                                <th>Jumlah</th>
                                <th>Saldo</th>
                                <th>Kategori</th>
                                <th>Admin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $transaksi as $t)
                                <tr class="{{ $t->kategori == 'MASUK' ? 'table-success' : 'table-danger' }}">
                                    <td>{{ $t->tanggal }}</td>
                                    <td>{{ $t->keterangan }}</td>
                                    <td>{{ 'Rp. ' . number_format($t->saldo - $t->jumlah, 2, ',', '.') }}</td>
                                    <td>{{ 'Rp. ' . number_format($t->jumlah, 2, ',', '.') }}</td>
                                    <td>{{ 'Rp. ' . number_format($t->saldo, 2, ',', '.') }}</td>
                                    <td>{{ $t->kategori }}</td>
                                    <td>{{ $t->admin }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
