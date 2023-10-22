@extends('layouts.app')

@section('content')

<div class="page-content container container-plus">
	<div class="page-header border-0">
		<h1 class="page-title text-primary-d2 text-160">
            Penjualan
        </h1>
    </div>
    <p class="mt-2 mt-lg-4">
	  	<a href="{{route('penjualan.index')}}" class="btn px-4 btn-info mb-1">Kembali</a>
	</p>

	<div class="card-body px-3 pb-1">
		<form class="mt-lg-3" autocomplete="off" method="post" action="{{route('penjualan.store')}}">
	    @csrf

		<div class="form-group row">
			<div class="col-sm-3 col-form-label text-sm-right pr-0">
				<label for="barang" class="mb-0">
				Barang
				</label>
			</div>
			<div class="col-sm-9">
			 	<select class="form-control col-sm-8 col-md-6" id="barang" name="barang" required="true">
			 		@foreach(App\Barang::all() as $key=>$barang)
			 		<option value="{{$barang->IdBarang}}"{{$key==0?' selected':''}}>{{$barang->NamaBarang}}</option>
			 		@endforeach
			 	</select>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-3 col-form-label text-sm-right pr-0">
				<label for="jumlah" class="mb-0">
				Jumlah
				</label>
			</div>
			<div class="col-sm-9">
			 	<input type="number" class="form-control col-sm-8 col-md-6" id="jumlah" name="jumlah" required="true" />
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-3 col-form-label text-sm-right pr-0">
				<label for="harga" class="mb-0">
				Harga
				</label>
			</div>
			<div class="col-sm-9">
			 	<input type="number" class="form-control col-sm-8 col-md-6" id="harga" name="harga" required="true" />
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-3 col-form-label text-sm-right pr-0">
				<label for="pelanggan" class="mb-0">
				Pelanggan
				</label>
			</div>
			<div class="col-sm-9">
			 	<select class="form-control col-sm-8 col-md-6" id="pelanggan" name="pelanggan" required="true">
			 		@foreach(App\Pelanggan::all() as $key=>$pelanggan)
			 		<option value="{{$pelanggan->IdPelanggan}}"{{$key==0?' selected':''}}>{{$pelanggan->NamaPelanggan}}</option>
			 		@endforeach
			 	</select>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-3 col-form-label text-sm-right pr-0">
				<label for="pengguna" class="mb-0">
				Pengguna
				</label>
			</div>
			<div class="col-sm-9">
			 	<select class="form-control col-sm-8 col-md-6" id="pengguna" name="pengguna" required="true">
			 		@foreach(App\Pengguna::all() as $key=>$pengguna)
			 		<option value="{{$pengguna->IdPengguna}}"{{$key==0?' selected':''}}>{{$pengguna->NamaPengguna}}</option>
			 		@endforeach
			 	</select>
			</div>
		</div>
  		<div class="mt-5 border-t-1 bgc-secondary-l4 brc-secondary-l2 py-35 mx-n25">
        	<div class="offset-md-3 col-md-9 text-nowrap">
				<button class="btn btn-primary btn-bold px-4" type="submit">
					<i class="fa fa-check mr-1"></i>
					Simpan
				</button>

				<button class="btn btn-outline-lightgrey btn-bgc-white btn-bold ml-2 px-4" type="reset">
					<i class="fa fa-undo mr-1"></i>
					Reset
				</button>
        	</div>
      	</div>
	    </form>
	</div>
</div>
@endsection