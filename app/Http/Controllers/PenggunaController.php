<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Pengguna;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['all'] =Pengguna::all();
        return view('pengguna.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengguna = new Pengguna;
        $pengguna->NamaPengguna = $request->name;
        $pengguna->Password = bcrypt($request->password);
        $pengguna->NamaDepan = $request->depan;
        $pengguna->NamaBelakang = $request->belakang;
        $pengguna->Alamat = $request->alamat;
        $pengguna->IdAkses = $request->hakakses;
        $pengguna->save();
        return Redirect::route('pengguna.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['pengguna'] =Pengguna::find($id);
        return view('pengguna.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['pengguna'] =Pengguna::find($id);
        return view('pengguna.edit', $data);
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
        $pengguna = Pengguna::find($id);
        $pengguna->NamaPengguna = $request->name;
        $pengguna->Password = bcrypt($request->password);
        $pengguna->NamaDepan = $request->depan;
        $pengguna->NamaBelakang = $request->belakang;
        $pengguna->Alamat = $request->alamat;
        $pengguna->IdAkses = $request->hakakses;
        $pengguna->save();
        return Redirect::route('pengguna.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengguna = Pengguna::find($id);
        $pengguna->delete();
        return Redirect::route('pengguna.index');
    }
}
