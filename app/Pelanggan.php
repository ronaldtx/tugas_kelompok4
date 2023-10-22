<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'IdPelanggan';
    public $timestamps = false;
    
    public function pengguna(){
        return $this->belongsTo(Pengguna::class, 'IdPengguna', 'IdPengguna');
    }
}
