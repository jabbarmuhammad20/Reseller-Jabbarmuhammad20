<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaldoKeluarMasuk extends Model
{
  protected $table = 'saldo_tabel';
  protected $fillable = [
    'user_id',
    'pesanan_id',
    'produk',
    'harga',
    'qty',
    'saldo_keluar',
    'saldo_masuk',
    'konfirmasi',
    'ket'
    ];

public function User()
       {
        return $this->belongsTo('App\User');
       }
}
