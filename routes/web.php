<?php

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
    return view('welcome');
});


//petugas
Route::get('/petugas/read_petugas','PetugasController@get_petugas');
Route::get('/petugas/input_petugas','PetugasController@input_petugas');
Route::post('/petugas/insert_petugas','PetugasController@insert_petugas');
Route::get('/petugas/edit_petugas/{id}','PetugasController@edit_petugas');
Route::post('/petugas/update_petugas','PetugasController@update_petugas');
Route::get('/petugas/hapus_petugas/{id}','PetugasController@hapus_petugas');
Route::get('/petugas/home_petugas','PetugasController@home_petugas');
Route::get('/petugas/login_petugas','PetugasController@login_petugas');
Route::post('/petugas/confirm_petugas','PetugasController@confirm_petugas');
Route::get('/petugas/regis_petugas','PetugasController@regis_petugas');
Route::post('/petugas/add_petugas','PetugasController@add_petugas');
Route::get('/petugas/logout_petugas','PetugasController@logout_petugas');
Route::get('/petugas/cetak_pdf','PetugasController@cetak_pdf');

//upload
Route::get('/upload','UploadController@upload');
Route::post('/upload/proses','UploadController@proses_upload');

Route::get('/pelanggan/read_pelanggan','PelangganController@get_pelanggan');
Route::get('/pelanggan/input_pelanggan','PelangganController@input_pelanggan');
Route::post('/pelanggan/insert_pelanggan','PelangganController@insert_pelanggan');
Route::get('/pelanggan/edit_pelanggan/{id}','PelangganController@edit_pelanggan');
Route::post('/pelanggan/update_pelanggan','PelangganController@update_pelanggan');
Route::get('/pelanggan/hapus_pelanggan/{id}','PelangganController@hapus_pelanggan');
Route::get('/pelanggan/login_pelanggan','PelangganController@login_pelanggan');
Route::post('/pelanggan/confirm_pelanggan','PelangganController@confirm_pelanggan');
Route::get('/pelanggan/regis_pelanggan','PelangganController@regis_pelanggan');
Route::post('/pelanggan/add_pelanggan','PelangganController@add_pelanggan');
Route::get('/pelanggan/logout_pelanggan','PelangganController@logout_pelanggan');

Route::get('/kamar/read_kamar','KamarController@get_kamar');
Route::get('/kamar/input_kamar','KamarController@input_kamar');
Route::post('/kamar/insert_kamar','KamarController@insert_kamar');
Route::get('/kamar/edit_kamar/{id}','KamarController@edit_kamar');
Route::post('/kamar/update_kamar','KamarController@update_kamar');
Route::get('/kamar/hapus_kamar/{id}','KamarController@hapus_kamar');

Route::get('/pembayaran/read_pembayaran','PembayaranController@get_pembayaran');
Route::get('/pembayaran/input_pembayaran','PembayaranController@input_pembayaran');
Route::post('/pembayaran/insert_pembayaran','PembayaranController@insert_pembayaran');
Route::get('/pembayaran/edit_pembayaran/{id}','PembayaranController@edit_pembayaran');
Route::post('/pembayaran/update_pembayaran','PembayaranController@update_pembayaran');
Route::get('/pembayaran/hapus_pembayaran/{id}','PembayaranController@hapus_pembayaran');

Route::get('/reservasi/read_reservasi','ReservasiController@get_reservasi');
Route::get('/reservasi/input_reservasi','ReservasiController@input_reservasi');
Route::post('/reservasi/insert_reservasi','ReservasiController@insert_reservasi');
Route::get('/reservasi/edit_reservasi/{id}','ReservasiController@edit_reservasi');
Route::post('/reservasi/update_reservasi','ReservasiController@update_reservasi');
Route::get('/reservasi/hapus_reservasi/{id}','ReservasiController@hapus_reservasi');

//menu pelanggan
Route::get('/home','CustomerController@home');
Route::get('/about_us','CustomerController@about');
Route::get('/daftar_kamar','CustomerController@kamar');
Route::get('/fasilitas','CustomerController@fasilitas');
Route::get('/singularity',"CustomerController@singularity");
Route::get('/serendipity',"CustomerController@serendipity");
Route::get('/epiphany',"CustomerController@epiphany");
Route::get('/booking',"CustomerController@booking");
Route::get('/confirm',"CustomerController@confirm");

Route::get('/booking/read_booking','CustomerController@get_booking');
Route::get('/booking/confirm_booking/{id}','CustomerController@confirm_booking');
Route::get('/booking/input_booking','CustomerController@input_booking');
Route::post('/booking/insert_booking','CustomerController@insert_booking');
Route::get('/booking/confirm','CustomerController@update_booking');
Route::get('/booking/hapus_booking/{id}','CustomerController@hapus_booking');
