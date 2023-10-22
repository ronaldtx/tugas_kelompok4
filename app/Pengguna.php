<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'IdPengguna';
    public $timestamps = false;
    
    public function akses(){
        return $this->belongsTo(HakAkses::class, 'IdAkses', 'IdAkses');
    }

}
