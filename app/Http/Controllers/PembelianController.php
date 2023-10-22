<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Pembelian;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['all'] =Pembelian::all();
        return view('pembelian.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembelian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembelian = new Pembelian;
        $pembelian->JumlahPembelian = $request->jumlah;
        $pembelian->HargaBeli = $request->harga;
        $pembelian->IdBarang = $request->barang;
        $pembelian->IdSupplier = $request->supplier;
        $pembelian->IdPengguna = $request->pengguna;
        $pembelian->save();
        return Redirect::route('pembelian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['pembelian'] =Pembelian::find($id);
        return view('pembelian.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['pembelian'] =Pembelian::find($id);
        return view('pembelian.edit', $data);
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
        $pembelian = Pembelian::find($id);
        $pembelian->JumlahPembelian = $request->jumlah;
        $pembelian->HargaBeli = $request->harga;
        $pembelian->IdBarang = $request->barang;
        $pembelian->IdSupplier = $request->supplier;
        $pembelian->IdPengguna = $request->pengguna;
        $pembelian->save();
        return Redirect::route('pembelian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembelian = Pembelian::find($id);
        $pembelian->delete();
        return Redirect::route('pembelian.index');
    }
}
