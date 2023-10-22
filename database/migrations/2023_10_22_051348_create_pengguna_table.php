<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id('IdPengguna');
            $table->string('NamaPengguna', 20);
            $table->string('Password');
            $table->string('NamaDepan');
            $table->string('NamaBelakang');
            $table->string('Alamat');
            $table->unsignedBigInteger('IdAkses');
        });
        Schema::table('pengguna', function (Blueprint $table) {
            $table->foreign('IdAkses')->references('IdAkses')->on('hakakses')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengguna');
    }
}
