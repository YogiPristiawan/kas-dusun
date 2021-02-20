<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function filter(Request $request)
    {
        $data = [

            'dateFrom' => $request->dateFrom,
            'dateTo' => $request->dateTo,
            'kategori' => $request->kategori,
            'admin' => $request->admin
        ];

        var_dump($data);
    }
}
