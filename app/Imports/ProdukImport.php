<?php

namespace App\Imports;

use App\Produk;
use Maatwebsite\Excel\Concerns\ToModel;

class ProdukImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Produk([
            'user_id' => $row[0],
            'kategori_id'    => $row[1],
            'k_produk'    => $row[2],
            'n_produk'    => $row[3],
            'deskripsi'    => $row[4],
            'warna'    => $row[5],
            'stok_m'    => $row[6],
            'stok_l'    => $row[7],
            'stok_xl'    => $row[8],
            'stok_xxl'    => $row[9],
            'hrg_m'    => $row[10],
            'hrg_l'    => $row[11],
            'hrg_xl'    => $row[12],
            'hrg_xxl'    => $row[13],
            'upload_produk'  => $row[14],
            'stts'    => $row[15]
        ]);
    }
}
