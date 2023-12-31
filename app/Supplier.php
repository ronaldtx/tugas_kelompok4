<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'supplier';
    protected $primaryKey = 'IdSupplier';
    public $timestamps = false;

    public function pengguna(){
        return $this->belongsTo(Pengguna::class, 'IdPengguna', 'IdPengguna');
    }
}
