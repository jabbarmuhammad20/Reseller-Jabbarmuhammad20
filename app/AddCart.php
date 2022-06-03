<?php namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCart extends Model {
    use HasFactory;
    protected $table='addcart_tabel';
    protected $fillable=[ 
    'id',
    'user_id',
    'produk_id',
    'harga',
    'jumlah'
    ];

    public function Produk()
    {
     return $this->belongsTo('App\Produk');
    }
}