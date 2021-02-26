<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
  protected $table = 'riwayat_tranksaksi_tabel';
  protected $fillable = [
        'id',
        'user_id',
        'produk_id',
        'invoice',
        'k_produk',
        'n_produk',
        'warna',
        'stok_m',
        'hrg_m',
        'stok_l',
        'hrg_l',
        'stok_xl',
        'hrg_xl',
        'stok_xxl',
        'hrg_xxl',
        'jumlah_total',
        'nm_pengirim',
        'almt_pengirim',
        'pengemasan',
        'dikirim',
        'upld_resi',
        'konfirmasi',
        'lunas'
    ];

    public function Produk()
	   {
	    return $this->belongsTo('App\Produk');
	   }

    public function User()
       {
        return $this->belongsTo('App\User');
       }
}
