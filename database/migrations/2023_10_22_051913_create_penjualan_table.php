<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id('IdPenjualan');
            $table->integer('JumlahPenjualan')->lenght(3);
            $table->decimal('HargaJual', 20,2);
            $table->unsignedBigInteger('IdBarang');
            $table->unsignedBigInteger('IdPelanggan');
            $table->unsignedBigInteger('IdPengguna');
        });
        Schema::table('penjualan', function (Blueprint $table) {
            $table->foreign('IdBarang')->references('IdBarang')->on('barang')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('IdPelanggan')->references('IdPelanggan')->on('pelanggan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('IdPengguna')->references('IdPengguna')->on('pengguna')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan');
    }
}
