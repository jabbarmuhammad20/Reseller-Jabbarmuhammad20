<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RiwayatTranksaksiController;

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
    return view('login.login');
});

Route::get('/info', function () {
    return view('info');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('qrcode', function () {

     return QrCode::size(300)->generate('https://wa.me/6285321862797');
 });

Route::group(['middleware'=>['auth','checkRole:admin']], function(){
	// ProdukController
	Route::get('/admin_diarsipkan','ProdukController@admin_diarsipkan');
	Route::get('/create/produk','ProdukController@create')->name('tambahproduk');
	Route::post('/tambahproduk','ProdukController@store');
	Route::get('/admin_editproduk/{id}','ProdukController@edit')->name('admin_editproduk');
	Route::delete('produk/delete{id}','ProdukController@destroy')->name('delete_produk');
	// Pelanggan
	Route::get('/admin_daftarpelanggan','UserController@index')->name('daftarpelanggan');
	Route::get('/tambahpelanggan','UserController@create')->name('tambahpelanggan');
	Route::post('/tambahpelanggan/tambah','UserController@store');
	Route::get('/user/hapus/{id}','UserController@destroy');
	// Pesanan
	Route::get('/user/destroy/{id}','UserController@destroy');
	Route::get('/pesanan_dikemas{id}',[RiwayatTranksaksiController::class, 'pesanan_dikemas'])->name('pesanan_dikemas');
	Route::get('/pesanan_proses','RiwayatTranksaksiController@pesanan_proses');
	Route::get('/admin_pesanansegeradikirim','RiwayatTranksaksiController@pesanan_segeradikirim');
	Route::get('/admin_terkonfirmasi','RiwayatTranksaksiController@pesanan_terkonfirmasi');
	Route::get('/admin_historipesanan','RiwayatTranksaksiController@admin_historipesanan');

	// saldokeluarmasuk
	Route::get('/pesanan_terkonfirmasi_show/{id}','SaldokeluarmasukController@create');
	Route::get('/admin_historisaldo','SaldokeluarmasukController@admin_historisaldo');
	Route::get('/tambah_saldocreate/{id}','SaldokeluarmasukController@tambah_saldocreate');
	Route::post('/tambah_saldostore','SaldokeluarmasukController@tambah_saldostore');

});

Route::group(['middleware'=>['auth','checkRole:admin,pelanggan']], function(){
	// Produk
	Route::resource('produk','ProdukController');
	Route::get('/daftar_produk','ProdukController@daftar_produk')->name('daftar_produk');
	Route::get('/lihatproduk/{id}','ProdukController@show');
	
	// Kategori
	Route::get('/k_jaket_bomber','ProdukController@k_jaket_bomber');
	Route::get('/k_jaket_zipper','ProdukController@k_jaket_zipper');
	Route::get('/k_jaket_hoodie','ProdukController@k_jaket_hoodie');
	Route::get('/k_kaos_polos_pendek','ProdukController@k_kaos_polos_pendek');
	Route::get('/k_kaos_polos_panjang','ProdukController@k_kaos_polos_panjang');
	
	/*Pelanggan*/
	Route::resource('pelanggan','UserController');
	Route::get('pelanggan_ceksaldo/{id}','UserController@pelanggan_saldo');

	// Saldo Keluar Masuk
	Route::resource('/saldokeluarmasuk','SaldokeluarmasukController');
	Route::get('/konfirmasi_create/{id}','SaldokeluarmasukController@konfirmasi_create')->name('konfirmasi_create');
	Route::post('/konfirmasi_store','SaldokeluarmasukController@konfirmasi_store');
	Route::get('/pelanggan_riwayatpembayaran/{id}','SaldokeluarmasukController@pelanggan_riwayatpembayaran');
	
	// Tranksaksi
	Route::resource('/riwayattranksaksi','RiwayatTranksaksiController');
	Route::get('/pesanan','RiwayatTranksaksiController@index');
	Route::get('/pesanancreate/{id}','RiwayatTranksaksiController@create');

	Route::get('/pelanggan_pesanandiproses/{id}','RiwayatTranksaksiController@pelanggan_pesanandiproses')->name('pesananproses');
	
	Route::get('/pelanggan_pesananhistori/{id}','RiwayatTranksaksiController@pelanggan_pesananhistori');
	Route::get('/pelanggan_pesanandikirim/{id}','RiwayatTranksaksiController@pelanggan_pesanandikirim');
	Route::get('/pelanggan_pesanandikonfirmasi/{id}','RiwayatTranksaksiController@pelanggan_pesanandikonfirmasi');

	Route::get('/pelanggan_histori/{id}','RiwayatTranksaksiController@pelanggan_pesananhistori');
	
	Route::get('/hapuspesanan/{id}','RiwayatTranksaksiController@destroy');
});
