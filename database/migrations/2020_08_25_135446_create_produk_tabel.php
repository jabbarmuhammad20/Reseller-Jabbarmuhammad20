<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_tabel', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('k_produk');
            $table->string('n_produk');
            $table->string('deskripsi');
            $table->string('uk');
            $table->integer('hrg_produk');
            $table->integer('hrg_produkgr');
            $table->integer('stok');
            $table->string('upload_produk');
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
        Schema::dropIfExists('produk_tabel');
    }
}
