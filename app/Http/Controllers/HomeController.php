<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $data = [
            'transaksi' => Transaksi::orderBy('tanggal', 'DESC')->limit(10)->get(),
            'title' => 'Dashboard'
        ];

        return view('index', $data);
    }
}
