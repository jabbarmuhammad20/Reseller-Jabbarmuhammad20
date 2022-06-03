<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddCart;
use App\Produk;
use Auth;

class AddcartController extends Controller {

    // memasukan kedalam keranjang
    public function mAddcart(Request $request) {
        $addcart=new AddCart;
        $addcart->user_id=Auth::user()->id;
        $addcart->produk_id=$request->produk_id;
        $addcart->harga=$request->harga;
        $addcart->jumlah=$request->jumlah;
        $addcart->save();
        return redirect()->back()->with('toast_success', 'Data Berhasil Ditambahkan !');
    }

    public function mcart() {
        // Menampilkan produk berdasarkan ser id yang aktif
        $produk_cart = AddCart::where('user_id', Auth::user()->id)->paginate(10);
       
        // foreach($produk_cart as $item=>$value)
        // //simpan nilai harga ke variabel $harga_total --}}
        // $harga_total = $value['harga'];

        return view('m/cart', compact('produk_cart'));
    }
}