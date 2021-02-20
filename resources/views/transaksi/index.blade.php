@extends('layouts/master')
@section('content')

	<div class="row">
        <!-- Area Chart -->
        <div class="col mt-5">
            <div class="col mb-3">
                <button class="btn btn-info" id="filter">
                    <i class="fa fa-filter" aria-hidden="true"><span class="ml-2">Filter</span></i>
                </button>
            </div>
            
            <div class="card form-group border p-1 d-none" id="filterForm">
                <div class="card-header">
                    <h5 class="m-0 font-weight-bold">Filter</h5>
                </div>
                <div class="p-2 clearfix">
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <label for="">Tanggal:</label>
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="date" name="dateFrom" class="form-control" id="dateFrom">
                                </div>
                                <div class="col-md-2 text-center"><h5 class="font-weight-bold">To</h5></div>
                                <div class="col-md-5">
                                    <input type="date" name="dateTo" class="form-control" id="dateTo">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-3">
                            <label for="kategori">Kategori:</label>
                            <select class="form-control" name="kategori" id="kategori">
                                <option value="">--Pilih Kategori--</option>
                                <option value="MASUK">PEMASUKAN</option>
                                <option value="KELUAR">PENGELUARAN</option>
                            </select>
                        </div>
                        <div class="col-md-3 mt-3">
                            <label for="admin">Admin:</label>
                            <select name="admin" id="admin" class="form-control">
                                <option value="">--Pilih Admin--</option>
                                @foreach($users as $u)
                                    <option value="{{ $u->id }}">{{ $u->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <button class="btn btn-success mt-3 float-right" id="show">Tampilkan</button>
                </div>

            </div>

            <div class="card shadow mb-4 p-1">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Riwayat Transaksi</h6>
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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="transaksi">
                            @foreach( $transaksi as $t)
                                <tr class="{{ $t->kategori == 'MASUK' ? 'table-success' : 'table-danger' }}">
                                    <td>{{ $t->tanggal }}</td>
                                    <td>{{ $t->keterangan }}</td>
                                    <td>{{ 'Rp. ' . number_format($t->saldo - $t->jumlah, 2, ',', '.') }}</td>
                                    <td>{{ 'Rp. ' . number_format($t->jumlah, 2, ',', '.') }}</td>
                                    <td>{{ 'Rp. ' . number_format($t->saldo, 2, ',', '.') }}</td>
                                    <td>{{ $t->kategori }}</td>
                                    <td>{{ $t->name }}</td>
                                    <td><h5><span class="badge badge-primary">Detail</span></h5></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                
                        {{ $transaksi->onEachSide(3)->links() }}
                   
                </div>
            </div>
        </div>
    </div>
@endsection