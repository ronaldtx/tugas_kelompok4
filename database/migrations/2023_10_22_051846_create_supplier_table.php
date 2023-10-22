<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->id('IdSupplier');
            $table->string('NamaSupplier', 20);
            $table->string('Alamat');
            $table->string('NoTelp');
            $table->unsignedBigInteger('IdPengguna');
        });
        Schema::table('supplier', function (Blueprint $table) {
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
        Schema::dropIfExists('supplier');
    }
}
