@extends('layouts.app')

@section('content')

<div class="page-content container container-plus">
	<div class="page-header border-0">
		<h1 class="page-title text-primary-d2 text-160">
            Pengguna
        </h1>
    </div>
	<p class="mt-2 mt-lg-4">
	  	<a href="{{route('pengguna.create')}}" class="btn px-4 btn-success mb-1">Buat Baru</a>
	</p>
	<table id="dtable" class="d-style w-100 table text-dark-m1 text-95 border-y-1 brc-black-tp11 collapsed">
	    <thead>
	        <tr>
	            <th>IdPengguna</th>
	            <th>Nama Pengguna</th>
	            <th>Nama Depan</th>
	            <th>Nama Belakang</th>
	            <th>Alamat</th>
	            <th>Nama Akses</th>
	            <th></th>
	        </tr>
	    </thead>
	    <tbody>
	    	@foreach($all as $a)
	    	<tr>
	    		<td>{{$a->IdPengguna}}</td>
	    		<td>{{$a->NamaPengguna}}</td>
	    		<td>{{$a->NamaDepan}}</td>
	    		<td>{{$a->NamaBelakang}}</td>
	    		<td>{{$a->Alamat}}</td>
	    		<td>{{$a->akses->NamaAkses}}</td>
	    		<td><a href="{{route('pengguna.edit', $a->IdPengguna)}}" class="btn px-4 btn-primary mb-1">Rubah</a> <a href="{{route('pengguna.show', $a->IdPengguna)}}" class="btn px-4 btn-danger mb-1">Hapus</a></td>
	    	</tr>
	    	@endforeach
	    </tbody>
	</table>
</div>
@endsection