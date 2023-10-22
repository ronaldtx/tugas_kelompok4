<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\HakAkses;

class HakAksesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['all'] =HakAkses::all();
        return view('hakakses.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hakakses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hakakses = new HakAkses;
        $hakakses->NamaAkses = $request->name;
        $hakakses->Keterangan = $request->keterangan;
        $hakakses->save();
        return Redirect::route('hakakses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['hakakses'] =HakAkses::find($id);
        return view('hakakses.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['hakakses'] =HakAkses::find($id);
        return view('hakakses.edit', $data);
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
        $hakakses = HakAkses::find($id);
        $hakakses->NamaAkses = $request->name;
        $hakakses->Keterangan = $request->keterangan;
        $hakakses->save();
        return Redirect::route('hakakses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hakakses = HakAkses::find($id);
        $hakakses->delete();
        return Redirect::route('hakakses.index');
    }
}
