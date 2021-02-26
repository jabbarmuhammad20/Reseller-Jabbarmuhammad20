<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaldoTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saldo_tabel', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('produk');
            $table->integer('harga');
            $table->integer('qty');
            $table->integer('saldo_keluar');
            $table->integer('saldo_masuk');
            $table->string('terkirim');
            $table->string('ket');
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
        Schema::dropIfExists('saldo_tabel');
    }
}
