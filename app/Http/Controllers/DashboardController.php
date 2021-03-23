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
        $produkall = Produk::paginate(12);
        return view('/layouts.ecommers', compact('kategori', 'produkall'));
    }

    public function Dashboard_kategori(Kategori $kategori)
    {
        $produkall = $kategori->Produk()->paginate(12);
        $kategori = Kategori::all();
        return view('/layouts.ecommers', compact('kategori', 'produkall'));
    }
}
