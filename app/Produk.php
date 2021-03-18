<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
  protected $table = 'produk_tabel';
  protected $fillable = [
    'id',
    'kategori',
    'user_id',
    'k_produk',
    'n_produk',
    'deskripsi',
    'warna',
    'stok_m',
    'hrg_m',
    'stok_l',
    'hrg_l',
    'stok_xl',
    'hrg_xl',
    'stok_xxl',
    'hrg_xxl',
    'hrg_produk',
    'hrg_toko',
    'upload_produk',
    'stts'
  ];

  public function Pesanan()
  {
    return $this->hasMany('App\Pesanan');
  }

  public function Kategori()
  {
    return $this->belongsTo('App\Kategori', 'kategori_id', 'id');
  }
}
