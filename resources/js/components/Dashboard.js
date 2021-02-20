import React from 'react';

class Dashboard extends React.Component{
    render(){
        return(
            <div>

                <div className="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 className="h3 mb-0 text-gray-800">SALDO</h1>
                    <a href="#" className="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i className="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>

                <div className="row text-center pt-5 saldo">
                    <div className="container">
                        <p>Rp 200.000</p>
                    </div>
                </div>
                <div className="row">
                    <div className="col mt-5">
                        <div className="card shadow mb-4 p-1">         
                            <div className="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 className="m-0 font-weight-bold text-primary">Rincian Transaksi Terbaru</h6>
                            </div>     
                            <div className="table-responsive-lg">
                                <table className="table">
                                    <thead className="thead-light">
                                        <tr>
                                            <th>No.</th>
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
                                        <tr>
                                            <td>1.</td>
                                            <td>24-07-2000</td>
                                            <td>jimpitan</td>
                                            <td>Rp. 500.000</td>
                                            <td>Rp. 80.000</td>
                                            <td>Rp. 580.000</td>
                                            <td>pemasukan</td>
                                            <td>Yogi</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        );
    }
}

export default Dashboard;