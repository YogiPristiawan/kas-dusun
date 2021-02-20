@extends('layouts/master')
@section('content')

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
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection