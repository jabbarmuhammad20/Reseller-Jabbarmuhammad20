<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Produk;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        $kategori = Kategori::all();
        $produkall = Produk::all();
        return view('/layouts.ecommers', compact('kategori', 'produkall'));
    }

    public function Dashboard_kategori(Kategori $kategori)
    {
        $produkall = $kategori->Produk()->get();
        $kategori = Kategori::all();
        return view('/layouts.ecommers', compact('kategori', 'produkall'));
    }
}
