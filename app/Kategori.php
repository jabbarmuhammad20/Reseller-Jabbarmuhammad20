<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori_tabel';
    protected $fillable = [
        'id',
        'n_kategori',
        'slug'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function Produk()
    {
        return $this->hasMany('App\Produk', 'kategori_id', 'id');
    }
}
