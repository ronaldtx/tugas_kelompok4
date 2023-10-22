<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';
    protected $primaryKey = 'IdPenjualan';
    public $timestamps = false;

    public function pelanggan(){
        return $this->belongsTo(Pelanggan::class, 'IdPelanggan', 'IdPelanggan');
    }

    public function barang(){
        return $this->belongsTo(Barang::class, 'IdBarang', 'IdBarang');
    }

    public function pengguna(){
        return $this->belongsTo(Pengguna::class, 'IdPengguna', 'IdPengguna');
    }
}
