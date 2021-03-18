<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use DB;
use File;
use Excel;
use App\Imports\ProdukImport;
use App\Exports\ProdukExport;
use App\Kategori;
use Illuminate\Support\Facades\DB as FacadesDB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public function admin_diarsipkan()
    {
        $produk_tabel = Produk::all();
        return view('produk.kategori.admin_diarsipkan', compact('produk_tabel'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('produk.tambah_produk', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'k_produk' => 'unique:produk_tabel'
        ]);

        $produk_tabel = new Produk;
        $produk_tabel->kategori_id = $request->kategori_id;
        $produk_tabel->user_id = $request->user_id;
        $produk_tabel->k_produk = $request->k_produk;
        $produk_tabel->n_produk = $request->n_produk;
        $produk_tabel->deskripsi = $request->deskripsi;
        $produk_tabel->warna = $request->warna;
        $produk_tabel->stok_m = $request->stok_m;
        $produk_tabel->hrg_m = $request->hrg_m;
        $produk_tabel->stok_l = $request->stok_l;
        $produk_tabel->hrg_l = $request->hrg_l;
        $produk_tabel->stok_xl = $request->stok_xl;
        $produk_tabel->hrg_xl = $request->hrg_xl;
        $produk_tabel->stok_xxl = $request->stok_xxl;
        $produk_tabel->hrg_xxl = $request->hrg_xxl;
        $produk_tabel->stts = $request->stts;
        $produk_tabel->upload_produk = $request->file('upload_produk')->store('File_Produk');
        $produk_tabel->save();
        return redirect()->back()->with('toast_success', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $produk_tabel = Produk::findOrFail($id);
        return view('produk.lihatproduk')->with('produk_tabel', $produk_tabel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk_tabel = Produk::findOrFail($id);
        return view('produk.admin_editproduk')->with('produk_tabel', $produk_tabel);
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
        $produk_tabel = Produk::where('id', $id)->first();
        $produk_tabel->fill($request->all());
        $produk_tabel->update();
        return redirect()->to('kategori')->with(['success' => 'Produk Berhasil Disimpan']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // hapus file
        $produk_tabel = Produk::where('id', $id)->first();
        File::delete('storage/' . $produk_tabel->upload_produk);

        // hapus data
        Produk::where('id', $id)->delete();

        return redirect()->back();
    }

    public function exportproduk()
    {
        return Excel::download(new ProdukExport, 'ExportProduk.xlsx');
    }

    public function importExcelProduk(Request $request)
    {
        Excel::import(new ProdukImport, request()->file('file'));
        // alihkan halaman kembali
        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan !');
    }
}
