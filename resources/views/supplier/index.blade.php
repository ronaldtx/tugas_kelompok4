@extends('layouts.app')

@section('content')

<div class="page-content container container-plus">
	<div class="page-header border-0">
		<h1 class="page-title text-primary-d2 text-160">
            Supplier
        </h1>
    </div>
	<p class="mt-2 mt-lg-4">
	  	<a href="{{route('supplier.create')}}" class="btn px-4 btn-success mb-1">Buat Baru</a>
	</p>
	<table id="dtable" class="d-style w-100 table text-dark-m1 text-95 border-y-1 brc-black-tp11 collapsed">
	    <thead>
	        <tr>
	            <th>IdSupplier</th>
	            <th>Nama Supplier</th>
	            <th>Alamat</th>
	            <th>No Telp</th>
	    		<td>Pengguna</td>
	            <th></th>
	        </tr>
	    </thead>
	    <tbody>
	    	@foreach($all as $a)
	    	<tr>
	    		<td>{{$a->IdSupplier}}</td>
	    		<td>{{$a->NamaSupplier}}</td>
	    		<td>{{$a->Alamat}}</td>
	    		<td>{{$a->NoTelp}}</td>
	    		<td>{{$a->pengguna->NamaPengguna}}</td>
	    		<td><a href="{{route('supplier.edit', $a->IdSupplier)}}" class="btn px-4 btn-primary mb-1">Rubah</a> <a href="{{route('supplier.show', $a->IdSupplier)}}" class="btn px-4 btn-danger mb-1">Hapus</a></td>
	    	</tr>
	    	@endforeach
	    </tbody>
	</table>
</div>
@endsection