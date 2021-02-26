<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use App\Produk;
use App\Pesanan;
use App\User;
use Auth;
use DB;


class RiwayatTranksaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    // untuk pelanggan
    {
        $riwayat_tranksaksi_tabel = Pesanan::all();
        return view('pesanan.pelanggan_historipesanan', ['riwayat_tranksaksi_tabel'=>$riwayat_tranksaksi_tabel]);
    }
    
    public function pesanan_proses()
    {
        //untuk admin
        $riwayat_tranksaksi_tabel = Pesanan::all();
        return view('/pesanan.admin_prosespesanan', ['riwayat_tranksaksi_tabel'=>$riwayat_tranksaksi_tabel]);
    }

    public function pesanan_segeradikirim()
    {
        //untuk admin
        $riwayat_tranksaksi_tabel = Pesanan::all();
        return view('/pesanan.admin_pesanansegeradikirim', ['riwayat_tranksaksi_tabel'=>$riwayat_tranksaksi_tabel]);
    }

    public function pesanan_terkonfirmasi()
    {
        //untuk admin
        $riwayat_tranksaksi_tabel = Pesanan::all();
        return view('/pesanan.admin_terkonfirmasi', ['riwayat_tranksaksi_tabel'=>$riwayat_tranksaksi_tabel]);
    }
        
    public function pesanan_terkonfirmasi_show($id)
    {
        //untuk admin
        $riwayat_tranksaksi_tabel = Pesanan::findOrFail($id);
        return view('/pesanan.konfirmasi.admin_konfimasipesanan', ['riwayat_tranksaksi_tabel'=>$riwayat_tranksaksi_tabel]);
    }

    public function admin_historipesanan()
    {
        //untuk admin
        $riwayat_tranksaksi_tabel = Pesanan::all();
        return view('/pesanan.admin_historipesanan', ['riwayat_tranksaksi_tabel'=>$riwayat_tranksaksi_tabel]);
    }


    public function pelanggan_pesanandiproses($id)
    {
        //untuk pelanggan
        $riwayat_tranksaksi_tabel = Pesanan::where('user_id',Auth::user()->id)->paginate(10);
        return view('/pesanan.pelanggan_pesanandiproses', ['riwayat_tranksaksi_tabel'=>$riwayat_tranksaksi_tabel]);
    }

    public function pelanggan_pesananhistori($id)
    {
        //untuk pelanggan
        $riwayat_tranksaksi_tabel = Pesanan::where('user_id',Auth::user()->id)->paginate(10);
        return view('/pesanan.pelanggan_historipesanan', ['riwayat_tranksaksi_tabel'=>$riwayat_tranksaksi_tabel]);
    }

    public function pelanggan_pesanandikirim($id)
    {
        //untuk pelanggan
        $riwayat_tranksaksi_tabel = Pesanan::where('user_id',Auth::user()->id)->paginate(10);
        return view('/pesanan.pelanggan_pesanandikirim', ['riwayat_tranksaksi_tabel'=>$riwayat_tranksaksi_tabel]);
    }

    public function pelanggan_pesanandikonfirmasi($id)
    {
        //untuk pelanggan
        $riwayat_tranksaksi_tabel = Pesanan::where('user_id',Auth::user()->id)->paginate(10);
        return view('/pesanan.pelanggan_pesananterkonfirmasi', ['riwayat_tranksaksi_tabel'=>$riwayat_tranksaksi_tabel]);
    }


    public function pesanan_dikemas($id)
    {
        //untuk admin
        $riwayat_tranksaksi_tabel = Pesanan::findOrFail($id);
        $qrcode = QrCode::size(400)->generate($riwayat_tranksaksi_tabel->id);
        return view('pesanan.admin_dikemas', ['riwayat_tranksaksi_tabel'=>$riwayat_tranksaksi_tabel]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $produk_tabel= Produk::findOrFail($id);
        return view ('pesanan.admin_daftarpesanan', ['produk_tabel'=>$produk_tabel]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $riwayat_tranksaksi_tabel= new Pesanan;
        $riwayat_tranksaksi_tabel->produk_id=$request->produk_id;
        $riwayat_tranksaksi_tabel->user_id=$request->user_id;
        $riwayat_tranksaksi_tabel->k_produk=$request->k_produk;
        $riwayat_tranksaksi_tabel->n_produk=$request->n_produk;
        $riwayat_tranksaksi_tabel->warna=$request->warna;
        $riwayat_tranksaksi_tabel->stok_m=$request->stok_m;
        $riwayat_tranksaksi_tabel->hrg_m=$request->hrg_m;
        $riwayat_tranksaksi_tabel->stok_l=$request->stok_l;
        $riwayat_tranksaksi_tabel->hrg_l=$request->hrg_l;
        $riwayat_tranksaksi_tabel->stok_xl=$request->stok_xl;
        $riwayat_tranksaksi_tabel->hrg_xl=$request->hrg_xl;
        $riwayat_tranksaksi_tabel->stok_xxl=$request->stok_xxl;
        $riwayat_tranksaksi_tabel->hrg_xxl=$request->hrg_xxl;
        $riwayat_tranksaksi_tabel->nm_pengirim=$request->nm_pengirim;
        $riwayat_tranksaksi_tabel->almt_pengirim=$request->almt_pengirim;
        $riwayat_tranksaksi_tabel->ket=$request->ket;
        $riwayat_tranksaksi_tabel->pengemasan='tidak';
        $riwayat_tranksaksi_tabel->dikirim='tidak';
        $riwayat_tranksaksi_tabel->konfirmasi='tidak';
        $riwayat_tranksaksi_tabel->upld_resi=$request->file('upld_resi')->store('File_Resi');
        $riwayat_tranksaksi_tabel->save();
        return redirect('/daftar_produk')->with('success', 'Data Berhasil Diproses !');
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
        //Pesanan dikemas
        $riwayat_tranksaksi_tabel= Pesanan::where('id', $id)->first();
        $riwayat_tranksaksi_tabel->fill($request->all());
        $riwayat_tranksaksi_tabel->update();
        return redirect()->to('/pesanan_proses')->with(['success' => 'Pesanan Berhasil Diproses']); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('riwayat_tranksaksi_tabel')->where('id',$id)->delete();
        return redirect()->to('/pesananproses')->with(['success' => 'Pesanan Berhasil Dibatalkan']);  
    }
}
