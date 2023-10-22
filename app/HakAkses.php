<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HakAkses extends Model
{
    protected $table = 'hakakses';
    protected $primaryKey = 'IdAkses';
    public $timestamps = false;
}
