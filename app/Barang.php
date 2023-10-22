<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'IdBarang';
    public $timestamps = false;
    
    public function pengguna(){
        return $this->belongsTo(Pengguna::class, 'IdPengguna', 'IdPengguna');
    }
    public function pembelian(){
        return $this->hasMany(Pembelian::class, 'IdBarang', 'IdBarang');
    }
    public function penjualan(){
        return $this->hasMany(Penjualan::class, 'IdBarang', 'IdBarang');
    }
    public function getJumlahBeliAttribute(){
        $return = 0;
        foreach($this->pembelian as $p){
            $return += $p->JumlahPembelian;
        }
        return $return;
    }
    public function getJumlahJualAttribute(){
        $return = 0;
        foreach($this->penjualan as $p){
            $return += $p->JumlahPenjualan;
        }
        return $return;
    }
    public function getTotalHargaBeliAttribute(){
        $return = 0;
        foreach($this->pembelian as $p){
            $return += $p->JumlahPembelian*$p->HargaBeli;
        }
        return number_format($return,2);
    }
    public function getTotalHargaJualAttribute(){
        $return = 0;
        foreach($this->penjualan as $p){
            $return += $p->JumlahPenjualan*$p->HargaJual;
        }
        return number_format($return,2);
    }
    public function getKeuntunganAttribute(){
        $return = str_replace(',', '', $this->total_harga_jual)-str_replace(',','',$this->total_harga_beli);
        return number_format($return,2);
    }
}
