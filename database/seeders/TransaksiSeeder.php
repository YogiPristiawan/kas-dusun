<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = true;
        $saldo = 0;
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 5 == 0) {
                $saldo -= 200000;
                DB::table('transaksi')->insert([
                    'tanggal' => date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') + $i, date('Y'))),
                    'keterangan' => 'sewa gedung dan pembayaran beberapa alat yang dibutuhkan',
                    'jumlah' => -200000,
                    'saldo' => $saldo,
                    'kategori' => 'KELUAR',
                    'admin' => 'yogi'
                ]);
            } else {
                $saldo += 500000;
                DB::table('transaksi')->insert([
                    'tanggal' => date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') + $i, date('Y'))),
                    'keterangan' => 'jimpitan',
                    'jumlah' => 500000,
                    'saldo' => $saldo,
                    'kategori' => 'MASUK',
                    'admin' => 'yogi'
                ]);
            }
        }
    }
}
