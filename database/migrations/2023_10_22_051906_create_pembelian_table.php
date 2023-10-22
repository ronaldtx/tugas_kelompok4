<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id('IdPembelian');
            $table->integer('JumlahPembelian')->lenght(3);
            $table->Decimal('HargaBeli', 20,2);
            $table->unsignedBigInteger('IdBarang');
            $table->unsignedBigInteger('IdSupplier');
            $table->unsignedBigInteger('IdPengguna');
        });
        Schema::table('pembelian', function (Blueprint $table) {
            $table->foreign('IdBarang')->references('IdBarang')->on('barang')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('IdSupplier')->references('IdSupplier')->on('supplier')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('pembelian');
    }
}
