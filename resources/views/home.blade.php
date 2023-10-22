@extends('layouts.app')

@section('content')
<div class="page-content container container-plus">
	<div class="page-header border-0">
		<h1 class="page-title text-primary-d2 text-160">
            Dashboard
        </h1>
		<table id="dtable" class="d-style w-100 table text-dark-m1 text-95 border-y-1 brc-black-tp11 collapsed">
		    <thead>
		        <tr>
		            <th>Id Barang</th>
		            <th>Nama Barang</th>
		            <th>Jumlah Pembelian</th>
		            <th>Jumlah Penjualan</th>
		            <th>Harga Pembelian</th>
		            <th>Harga Penjualan</th>
		    		<td>Keuntungan/Kerugian</td>
		        </tr>
		    </thead>
		    <tbody>
		    	@foreach(App\Barang::all() as $a)
		    	<tr>
		    		<td>{{$a->IdBarang}}</td>
		    		<td>{{$a->NamaBarang}}</td>
		    		<td>{{$a->jumlah_beli}}</td>
		    		<td>{{$a->jumlah_jual}}</td>
		    		<td>{{$a->total_harga_beli}}</td>
		    		<td>{{$a->total_harga_jual}}</td>
		    		<td>{{$a->keuntungan}}</td>
		    	</tr>
		    	@endforeach
		    </tbody>
		</table>

    </div>
</div>
@endsection