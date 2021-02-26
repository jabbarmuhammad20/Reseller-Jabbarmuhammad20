<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role','n_toko','tem_lahir','tgl_lahir','alamat','no_hp','norek','norek_an','bank','saldo','ket'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function Pesanan()
       {
        return $this->hashMany('App\Pesanan');
       }
       
    public function SaldoKeluarMasuk()
       {
        return $this->hashMany('App\SaldoKeluarMasuk');
       }

}
