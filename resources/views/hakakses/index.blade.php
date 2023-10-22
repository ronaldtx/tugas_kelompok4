@extends('layouts.app')

@section('content')

<div class="page-content container container-plus">
	<div class="page-header border-0">
		<h1 class="page-title text-primary-d2 text-160">
            Hak Akses
        </h1>
    </div>
	<p class="mt-2 mt-lg-4">
	  	<a href="{{route('hakakses.create')}}" class="btn px-4 btn-success mb-1">Buat Baru</a>
	</p>
	<table id="dtable" class="d-style w-100 table text-dark-m1 text-95 border-y-1 brc-black-tp11 collapsed">
	    <thead>
	        <tr>
	            <th>IdAkses</th>
	            <th>Nama Akses</th>
	            <th>Keterangan</th>
	            <th></th>
	        </tr>
	    </thead>
	    <tbody>
	    	@foreach($all as $a)
	    	<tr>
	    		<td>{{$a->IdAkses}}</td>
	    		<td>{{$a->NamaAkses}}</td>
	    		<td>{{$a->Keterangan}}</td>
	    		<td><a href="{{route('hakakses.edit', $a->IdAkses)}}" class="btn px-4 btn-primary mb-1">Rubah</a> <a href="{{route('hakakses.show', $a->IdAkses)}}" class="btn px-4 btn-danger mb-1">Hapus</a></td>
	    	</tr>
	    	@endforeach
	    </tbody>
	</table>
</div>
@endsection