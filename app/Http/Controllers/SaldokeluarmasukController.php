<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SaldoKeluarMasuk;
use App\Pesanan;
use App\User;
use Auth;

class SaldokeluarmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function admin_historisaldo()
    {
        $saldo_keluar_masuk_tabel= SaldoKeluarMasuk::all();
        return view('/saldo.admin_historisaldo', ['saldo_keluar_masuk_tabel'=>$saldo_keluar_masuk_tabel]);
    }

    public function pelanggan_riwayatpembayaran($id)
    {
        $saldo_keluar_masuk_tabel= SaldoKeluarMasuk::where('user_id',Auth::user()->id)->paginate(10);
        return view('/saldo.pelanggan_riwayatpembayaran', ['saldo_keluar_masuk_tabel'=>$saldo_keluar_masuk_tabel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    { 
        $riwayat_tranksaksi_tabel = Pesanan::findOrFail($id);
        return view('pesanan.konfirmasi.admin_konfirmasipesanan',['riwayat_tranksaksi_tabel'=>$riwayat_tranksaksi_tabel]);
    }

    public function konfirmasi_create($id)
    { 
        $riwayat_tranksaksi_tabel = Pesanan::findOrFail($id);
        return view('pesanan.konfirmasi.pelanggan_konfirmasipesanan',['riwayat_tranksaksi_tabel'=>$riwayat_tranksaksi_tabel]);
    }

    public function konfirmasi_store(Request $request)
    {
        $this->validate($request,[
            'pesanan_id'=>'unique:saldo_tabel'
            ]);

        $saldo_tabel= new SaldoKeluarMasuk;
        $saldo_tabel->user_id=$request->user_id;
        $saldo_tabel->pesanan_id=$request->pesanan_id;
        $saldo_tabel->produk=$request->produk;
        $saldo_tabel->harga=$request->harga;
        $saldo_tabel->qty=$request->qty;
        $saldo_tabel->saldo_keluar=$request->saldo_keluar;
        $saldo_tabel->saldo_masuk='0';
        $saldo_tabel->konfirmasi=$request->konfirmasi;
        $saldo_tabel->ket=$request->ket;
        $saldo_tabel->save();

        // Update ke tabel riwayat_tranksaksi_tabel
        $riwayat_tranksaksi_tabel= Pesanan::findOrFail ($saldo_tabel->pesanan_id=$request->pesanan_id);
        $riwayat_tranksaksi_tabel->konfirmasi=$request->konfirmasi;
        $riwayat_tranksaksi_tabel->update();

        return redirect('/pelanggan_pesanandikonfirmasi/{id}')->with(['success' => 'Pesanan Berhasil Dikonfirmasi']);
    }


    public function tambah_saldocreate($id)
    { 
        $users = User::findOrFail($id);
        return view('saldo.admin_tambahsaldo',['users'=>$users]);
    }

    public function tambah_saldostore(Request $request)
    {
        $saldo_tabel= new SaldoKeluarMasuk;
        $saldo_tabel->user_id=$request->user_id;
        $saldo_tabel->pesanan_id='0';
        $saldo_tabel->produk='0';
        $saldo_tabel->harga='0';
        $saldo_tabel->qty='0';
        $saldo_tabel->saldo_keluar='0';
        $saldo_tabel->saldo_masuk=$request->saldo_masuk;
        $saldo_tabel->konfirmasi='0';
        $saldo_tabel->ket='0';
        $saldo_tabel->save();
        return redirect()->to('/admin_daftarpelanggan')->with(['success' => 'Saldo Berhasil Ditambahkan']);
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'pesanan_id'=>'unique:saldo_tabel'
            ]);

        $saldo_tabel= new SaldoKeluarMasuk;
        $saldo_tabel->user_id=$request->user_id;
        $saldo_tabel->pesanan_id=$request->pesanan_id;
        $saldo_tabel->produk=$request->produk;
        $saldo_tabel->harga=$request->harga;
        $saldo_tabel->qty=$request->qty;
        $saldo_tabel->saldo_keluar=$request->saldo_keluar;
        $saldo_tabel->saldo_masuk='0';
        $saldo_tabel->konfirmasi=$request->konfirmasi;
        $saldo_tabel->ket=$request->ket;
        $saldo_tabel->save();

        // Update ke tabel riwayat_tranksaksi_tabel
        $riwayat_tranksaksi_tabel= Pesanan::findOrFail ($saldo_tabel->pesanan_id=$request->pesanan_id);
        $riwayat_tranksaksi_tabel->konfirmasi=$request->konfirmasi;
        $riwayat_tranksaksi_tabel->update();

        return redirect('admin_terkonfirmasi')->with(['success' => 'Pesanan Berhasil Dikonfirmasi']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
