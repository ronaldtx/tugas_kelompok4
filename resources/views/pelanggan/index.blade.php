@extends('layouts.app')

@section('content')

<div class="page-content container container-plus">
	<div class="page-header border-0">
		<h1 class="page-title text-primary-d2 text-160">
            Pelanggan
        </h1>
    </div>
	<p class="mt-2 mt-lg-4">
	  	<a href="{{route('pelanggan.create')}}" class="btn px-4 btn-success mb-1">Buat Baru</a>
	</p>
	<table id="dtable" class="d-style w-100 table text-dark-m1 text-95 border-y-1 brc-black-tp11 collapsed">
	    <thead>
	        <tr>
	            <th>IdPelanggan</th>
	            <th>Nama Pelanggan</th>
	            <th>Alamat</th>
	            <th>No Telp</th>
	            <th>Pengguna</th>
	            <th></th>
	        </tr>
	    </thead>
	    <tbody>
	    	@foreach($all as $a)
	    	<tr>
	    		<td>{{$a->IdPelanggan}}</td>
	    		<td>{{$a->NamaPelanggan}}</td>
	    		<td>{{$a->Alamat}}</td>
	    		<td>{{$a->NoTelp}}</td>
	    		<td>{{$a->pengguna->NamaPengguna}}</td>
	    		<td><a href="{{route('pelanggan.edit', $a->IdPelanggan)}}" class="btn px-4 btn-primary mb-1">Rubah</a> <a href="{{route('pelanggan.show', $a->IdPelanggan)}}" class="btn px-4 btn-danger mb-1">Hapus</a></td>
	    	</tr>
	    	@endforeach
	    </tbody>
	</table>
</div>
@endsection