<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Produk;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        $produkall = Produk::paginate(8);
        return view('produk.daftar_produk', compact('kategori', 'produkall'));
    }

    public function kategori_show(Kategori $kategori)
    {
        $produkall = $kategori->Produk()->paginate(8);
        $kategori = Kategori::all();
        return view('produk.daftar_produk', compact('produkall', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_tabel = Kategori::all();
        return view('produk.kategori.admin_tambahKategori')->with('kategori_tabel', $kategori_tabel);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori_tabel = new \App\Kategori();
        $kategori_tabel->n_kategori = $request->n_kategori;
        $kategori_tabel->slug = $request->slug;
        $kategori_tabel->save();
        return redirect()->back()->with('success', 'Kategori Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('/produk.kategori.admin_editKategori', compact('kategori'));
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
        $kategori = Kategori::where('id', $id)->first();
        $kategori->fill($request->all());
        $kategori->update();
        return redirect('/admin_createKategori')->with(['success' => 'Kategori Berhasil Disimpan']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kategori::where('id', $id)->delete();
        return redirect()->back();
    }

    public function show_produk($id)
    {
        $produk_tabel = Produk::findOrFail($id);
        return view('layouts.front_showProduk')->with('produk_tabel', $produk_tabel);
    }
}
