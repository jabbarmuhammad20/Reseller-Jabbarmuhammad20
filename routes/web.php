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

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
	// ProdukController
	Route::post('/importExcelProduk', 'ProdukController@importExcelProduk');
	Route::get('/admin_diarsipkan', 'ProdukController@admin_diarsipkan');
	Route::get('/create_produk', 'ProdukController@create')->name('tambahproduk');
	Route::post('/tambahproduk', 'ProdukController@store');
	Route::get('/admin_editproduk/{id}', 'ProdukController@edit')->name('admin_editproduk');
	Route::delete('produk/delete{id}', 'ProdukController@destroy')->name('delete_produk');
	Route::get('produk/export', 'ProdukController@exportproduk');

	// Pelanggan
	Route::get('/admin_daftarpelanggan', 'UserController@index')->name('daftarpelanggan');
	Route::get('/tambahpelanggan', 'UserController@create')->name('tambahpelanggan');
	Route::post('/tambahpelanggan/tambah', 'UserController@store');
	Route::get('/user/hapus/{id}', 'UserController@destroy');
	Route::get('/export/user', 'UserController@exportuser');

	// Pesanan
	Route::get('/user/destroy/{id}', 'UserController@destroy');
	Route::get('/pesanan_dikemas{id}', [RiwayatTranksaksiController::class, 'pesanan_dikemas'])->name('pesanan_dikemas');
	Route::get('/pesanan_proses', 'RiwayatTranksaksiController@pesanan_proses');
	Route::get('/admin_pesanansegeradikirim', 'RiwayatTranksaksiController@pesanan_segeradikirim');
	Route::get('/admin_terkonfirmasi', 'RiwayatTranksaksiController@pesanan_terkonfirmasi');
	Route::get('/admin_historipesanan', 'RiwayatTranksaksiController@admin_historipesanan');

	// Kategori
	Route::get('/admin_createKategori', 'KategoriController@create');
	Route::post('/admin_storeKategori', 'KategoriController@store')->name('tambah.kategori');
	Route::get('/kategori-{id}', 'KategoriController@show')->name('kategori.show');
	Route::delete('kategori/delete{id}', 'KategoriController@destroy')->name('kategori.delete');

	// saldokeluarmasuk
	Route::get('/pesanan_terkonfirmasi_show/{id}', 'SaldokeluarmasukController@create');
	Route::get('/admin_historisaldo', 'SaldokeluarmasukController@admin_historisaldo');
	Route::get('/tambah_saldocreate/{id}', 'SaldokeluarmasukController@tambah_saldocreate');
	Route::post('/tambah_saldostore', 'SaldokeluarmasukController@tambah_saldostore');
});

Route::group(['middleware' => ['auth', 'checkRole:admin,pelanggan']], function () {
	// Produk
	Route::resource('produk', 'ProdukController');
	Route::get('/lihatproduk/{id}', 'ProdukController@show')->name('lihat.produk');

	// Kategori
	Route::resource('/kategori', 'KategoriController');
	Route::get('/daftar_produk', 'KategoriController@index')->name('kategori');
	Route::get('/kategori/{kategori}', 'KategoriController@kategori_show')->name('produkkategori.show');

	/*Pelanggan*/
	Route::resource('pelanggan', 'UserController');
	Route::get('pelanggan_ceksaldo/{id}', 'UserController@pelanggan_saldo');
	Route::get('pelanggan_profile', 'UserController@pelanggan_profile');

	// Ganti Kata Sandi
	Route::get('/pelanggan_sandi', 'UserController@pelanggan_sandi');
	Route::put('/password', 'PasswordController@update')->name('password.update');

	// Saldo Keluar Masuk
	Route::resource('/saldokeluarmasuk', 'SaldokeluarmasukController');
	Route::get('/konfirmasi_create/{id}', 'SaldokeluarmasukController@konfirmasi_create')->name('konfirmasi_create');
	Route::post('/konfirmasi_store', 'SaldokeluarmasukController@konfirmasi_store');
	Route::get('/pelanggan_riwayatpembayaran/{id}', 'SaldokeluarmasukController@pelanggan_riwayatpembayaran');

	// Tranksaksi
	Route::resource('/riwayattranksaksi', 'RiwayatTranksaksiController');
	Route::get('/pesanan', 'RiwayatTranksaksiController@index');
	Route::get('/pesanancreate/{id}', 'RiwayatTranksaksiController@create')->name('create.tranksaksi');
	Route::get('/pelanggan_pesanandiproses/{id}', 'RiwayatTranksaksiController@pelanggan_pesanandiproses')->name('pesananproses');
	Route::get('/pelanggan_pesananhistori/{id}', 'RiwayatTranksaksiController@pelanggan_pesananhistori');
	Route::get('/pelanggan_pesanandikirim/{id}', 'RiwayatTranksaksiController@pelanggan_pesanandikirim');
	Route::get('/pelanggan_pesanandikonfirmasi/{id}', 'RiwayatTranksaksiController@pelanggan_pesanandikonfirmasi');
	Route::get('/pelanggan_histori/{id}', 'RiwayatTranksaksiController@pelanggan_pesananhistori');
	Route::delete('/hapuspesanan/{id}', 'RiwayatTranksaksiController@destroy')->name('tranksaksi.destroy');
});
