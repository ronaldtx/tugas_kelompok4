<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="{{url('/')}}">Tugas Kelompok 4</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="{{url('/')}}" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('hakakses.index')}}">Hak Akses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('pengguna.index') }}">Pengguna</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('barang.index') }}">Barang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('pelanggan.index')}}">Pelanggan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('supplier.index')}}">Supplier</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('pembelian.index')}}">Pembelian</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('penjualan.index')}}">Penjualan</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="flex-left position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div role="main" class="main-content">
            	@yield('content')
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
