<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('hakakses', 'HakaksesController@index')->name('hakakses.index');
Route::get('hakakses/create', 'HakaksesController@create')->name('hakakses.create');
Route::get('hakakses/edit/{id}', 'HakaksesController@edit')->name('hakakses.edit');
Route::get('hakakses/show/{id}', 'HakaksesController@show')->name('hakakses.show');
Route::post('hakakses/store', 'HakaksesController@store')->name('hakakses.store');
Route::post('hakakses//update/{id}', 'HakaksesController@update')->name('hakakses.update');
Route::post('hakakses/destroy/{id}', 'HakaksesController@destroy')->name('hakakses.destroy');

Route::get('pengguna', 'PenggunaController@index')->name('pengguna.index');
Route::get('pengguna/create', 'PenggunaController@create')->name('pengguna.create');
Route::get('pengguna/edit/{id}', 'PenggunaController@edit')->name('pengguna.edit');
Route::get('pengguna/show/{id}', 'PenggunaController@show')->name('pengguna.show');
Route::post('pengguna/store', 'PenggunaController@store')->name('pengguna.store');
Route::post('pengguna//update/{id}', 'PenggunaController@update')->name('pengguna.update');
Route::post('pengguna/destroy/{id}', 'PenggunaController@destroy')->name('pengguna.destroy');

Route::get('barang', 'BarangController@index')->name('barang.index');
Route::get('barang/create', 'BarangController@create')->name('barang.create');
Route::get('barang/edit/{id}', 'BarangController@edit')->name('barang.edit');
Route::get('barang/show/{id}', 'BarangController@show')->name('barang.show');
Route::post('barang/store', 'BarangController@store')->name('barang.store');
Route::post('barang//update/{id}', 'BarangController@update')->name('barang.update');
Route::post('barang/destroy/{id}', 'BarangController@destroy')->name('barang.destroy');

Route::get('pelanggan', 'PelangganController@index')->name('pelanggan.index');
Route::get('pelanggan/create', 'PelangganController@create')->name('pelanggan.create');
Route::get('pelanggan/edit/{id}', 'PelangganController@edit')->name('pelanggan.edit');
Route::get('pelanggan/show/{id}', 'PelangganController@show')->name('pelanggan.show');
Route::post('pelanggan/store', 'PelangganController@store')->name('pelanggan.store');
Route::post('pelanggan//update/{id}', 'PelangganController@update')->name('pelanggan.update');
Route::post('pelanggan/destroy/{id}', 'PelangganController@destroy')->name('pelanggan.destroy');

Route::get('supplier', 'SupplierController@index')->name('supplier.index');
Route::get('supplier/create', 'SupplierController@create')->name('supplier.create');
Route::get('supplier/edit/{id}', 'SupplierController@edit')->name('supplier.edit');
Route::get('supplier/show/{id}', 'SupplierController@show')->name('supplier.show');
Route::post('supplier/store', 'SupplierController@store')->name('supplier.store');
Route::post('supplier//update/{id}', 'SupplierController@update')->name('supplier.update');
Route::post('supplier/destroy/{id}', 'SupplierController@destroy')->name('supplier.destroy');

Route::get('pembelian', 'PembelianController@index')->name('pembelian.index');
Route::get('pembelian/create', 'PembelianController@create')->name('pembelian.create');
Route::get('pembelian/edit/{id}', 'PembelianController@edit')->name('pembelian.edit');
Route::get('pembelian/show/{id}', 'PembelianController@show')->name('pembelian.show');
Route::post('pembelian/store', 'PembelianController@store')->name('pembelian.store');
Route::post('pembelian//update/{id}', 'PembelianController@update')->name('pembelian.update');
Route::post('pembelian/destroy/{id}', 'PembelianController@destroy')->name('pembelian.destroy');

Route::get('penjualan', 'PenjualanController@index')->name('penjualan.index');
Route::get('penjualan/create', 'PenjualanController@create')->name('penjualan.create');
Route::get('penjualan/edit/{id}', 'PenjualanController@edit')->name('penjualan.edit');
Route::get('penjualan/show/{id}', 'PenjualanController@show')->name('penjualan.show');
Route::post('penjualan/store', 'PenjualanController@store')->name('penjualan.store');
Route::post('penjualan//update/{id}', 'PenjualanController@update')->name('penjualan.update');
Route::post('penjualan/destroy/{id}', 'PenjualanController@destroy')->name('penjualan.destroy');
