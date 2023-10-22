<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['all'] =Pelanggan::all();
        return view('pelanggan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelanggan = new Pelanggan;
        $pelanggan->NamaPelanggan = $request->name;
        $pelanggan->Alamat = $request->alamat;
        $pelanggan->NoTelp = $request->notelp;
        $pelanggan->IdPengguna = $request->pengguna;
        $pelanggan->save();
        return Redirect::route('pelanggan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['pelanggan'] =Pelanggan::find($id);
        return view('pelanggan.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['pelanggan'] =Pelanggan::find($id);
        return view('pelanggan.edit', $data);
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
        $pelanggan = Pelanggan::find($id);
        $pelanggan->NamaPelanggan = $request->name;
        $pelanggan->Alamat = $request->alamat;
        $pelanggan->NoTelp = $request->notelp;
        $pelanggan->IdPengguna = $request->pengguna;
        $pelanggan->save();
        return Redirect::route('pelanggan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();
        return Redirect::route('pelanggan.index');
    }
}
