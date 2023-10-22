<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id('IdBarang');
            $table->string('NamaBarang', 20);
            $table->string('Keterangan');
            $table->string('Satuan');
            $table->unsignedBigInteger('IdPengguna');
        });
        Schema::table('barang', function (Blueprint $table) {
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
        Schema::dropIfExists('barang');
    }
}
