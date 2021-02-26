<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatTranksaksiTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_tranksaksi_tabel', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id'); //user_id
            $table->string('k_produk'); /*Kode Produk*/
            $table->string('n_produk');  /*nama Produk*/
            $table->string('uk_produk');  /*Ukuran Produk*/
            $table->integer('j_pesanan'); /*Jumlah Pesanan*/
            $table->integer('hrg_produk'); /*Harga Produk*/
            $table->integer('nm_pengirim'); /*Nama Pengirim*/
            $table->integer('almt_pengirim'); /*Alamat Pengirim*/
            $table->integer('pengemasan'); /*Pengemasan*/
            $table->integer('dikirim'); /*dikirim*/
            $table->integer('upld_resi'); /*upload Resi*/
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_tranksaksi_tabel');
    }
}
