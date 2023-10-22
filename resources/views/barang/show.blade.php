@extends('layouts.app')

@section('content')

<div class="page-content container container-plus">
	<div class="page-header border-0">
		<h1 class="page-title text-primary-d2 text-160">
            Barang
        </h1>
    </div>
    <p class="mt-2 mt-lg-4">
	  	<a href="{{route('barang.index')}}" class="btn px-4 btn-info mb-1">Kembali</a>
	</p>

	<div class="card-body px-3 pb-1">
		<form class="mt-lg-3" autocomplete="off" method="post" action="{{route('barang.destroy', $barang->IdBarang)}}">
	    @csrf
		<div class="form-group row">
			<div class="col-sm-3 col-form-label text-sm-right pr-0">
				<label for="name" class="mb-0">
				Nama Barang
				</label>
			</div>
			<div class="col-sm-9">
			 	<input type="text" class="form-control col-sm-8 col-md-6" id="name" name="name" value="{{$barang->NamaBarang}}" disabled="true" />
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-3 col-form-label text-sm-right pr-0">
				<label for="keterangan" class="mb-0">
				Keterangan
				</label>
			</div>
			<div class="col-sm-9">
			 	<input type="text" class="form-control col-sm-8 col-md-6" id="keterangan" name="keterangan" value="{{$barang->Keterangan}}" disabled="true" />
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-3 col-form-label text-sm-right pr-0">
				<label for="satuan" class="mb-0">
				Satuan
				</label>
			</div>
			<div class="col-sm-9">
			 	<input type="text" class="form-control col-sm-8 col-md-6" id="satuan" name="satuan" value="{{$barang->Satuan}}" disabled="true" />
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-3 col-form-label text-sm-right pr-0">
				<label for="pengguna" class="mb-0">
				Pengguna
				</label>
			</div>
			<div class="col-sm-9">
			 	<select class="form-control col-sm-8 col-md-6" id="pengguna" name="pengguna" disabled="true">
			 		@foreach(App\Pengguna::all() as $key=>$pengguna)
			 		<option value="{{$pengguna->IdPengguna}}"{{$barang->IdPengguna==$pengguna->IdPengguna?' selected':''}}>{{$pengguna->NamaPengguna}}</option>
			 		@endforeach
			 	</select>
			</div>
		</div>
  		<div class="mt-5 border-t-1 bgc-secondary-l4 brc-secondary-l2 py-35 mx-n25">
        	<div class="offset-md-3 col-md-9 text-nowrap">
				<button class="btn btn-danger btn-bold px-4" type="submit">
					<i class="fa fa-check mr-1"></i>
					Hapus
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