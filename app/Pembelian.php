<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = 'pembelian';
    protected $primaryKey = 'IdPembelian';
    public $timestamps = false;

    public function supplier(){
        return $this->belongsTo(Supplier::class, 'IdSupplier', 'IdSupplier');
    }

    public function barang(){
        return $this->belongsTo(Barang::class, 'IdBarang', 'IdBarang');
    }

    public function pengguna(){
        return $this->belongsTo(Pengguna::class, 'IdPengguna', 'IdPengguna');
    }
}
