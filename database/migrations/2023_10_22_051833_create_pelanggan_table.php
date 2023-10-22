<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id('IdPelanggan');
            $table->string('NamaPelanggan', 20);
            $table->string('Alamat');
            $table->string('NoTelp');
            $table->unsignedBigInteger('IdPengguna');
        });
        Schema::table('pelanggan', function (Blueprint $table) {
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
        Schema::dropIfExists('pelanggan');
    }
}
