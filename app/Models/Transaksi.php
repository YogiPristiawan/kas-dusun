<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = [
        'tanggal',
        'keterangan',
        'jumlah',
        'saldo',
        'kategori',
        'admin'
    ];

    public function description()
    {
        return $this->hasOne(Description::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
