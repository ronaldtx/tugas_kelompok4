<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Penjualan;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['all'] =Penjualan::all();
        return view('penjualan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penjualan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penjualan = new Penjualan;
        $penjualan->JumlahPenjualan = $request->jumlah;
        $penjualan->HargaJual = $request->harga;
        $penjualan->IdBarang = $request->barang;
        $penjualan->IdPelanggan = $request->pelanggan;
        $penjualan->IdPengguna = $request->pengguna;
        $penjualan->save();
        return Redirect::route('penjualan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['penjualan'] =Penjualan::find($id);
        return view('penjualan.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['penjualan'] =Penjualan::find($id);
        return view('penjualan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->JumlahPenjualan = $request->jumlah;
        $penjualan->HargaJual = $request->harga;
        $penjualan->IdBarang = $request->barang;
        $penjualan->IdPelanggan = $request->pelanggan;
        $penjualan->IdPengguna = $request->pengguna;
        $penjualan->save();
        return Redirect::route('penjualan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->delete();
        return Redirect::route('penjualan.index');
    }
}
