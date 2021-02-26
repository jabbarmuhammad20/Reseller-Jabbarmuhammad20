<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\User;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('pelanggan.admin_daftarpelanggan', ['users'=>$users]);
    }

    public function pelanggan_saldo($id)
    {
         $users= User::where('id',Auth::user()->id)->first();
        return view('/saldo.pelanggan_saldo')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.admin_tambahpelanggan');
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
            'n_toko'=>'required',
            'name'=>'min:5',
            'email'=>'required|email|unique:users',
            'tem_lahir'=>'required',
            'role'=>'required',
            'tgl_lahir'=>'required'
            
        ]);
        $users = new \App\User;
        $users-> role=$request->role;
        $users-> name=$request->name;
        $users-> n_toko=$request->n_toko;
        $users-> email=$request->email;
        $users-> tem_lahir=$request->tem_lahir;
        $users-> tgl_lahir=$request->tgl_lahir;
        $users-> alamat=$request->alamat;
        $users-> no_hp=$request->no_hp;
        $users-> norek='-';
        $users-> norek_an='-';
        $users-> bank='-';
        $users-> saldo='0';
        $users-> ket='-';
        $users-> password= bcrypt('123456789');
      
        $users->save();
        return redirect()->to('/tambahpelanggan')->with(['success' => 'Data Pelanggan Berhasil Ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //lihat data versi admin
    {
        $users = User::where('id', $id)->first();
        return view ('pelanggan.admin_lihatpelanggan')->with('users',$users);
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
        DB::table('users')->where('id',$id)->delete();
        return redirect()->to('/admin_daftarpelanggan')->with(['success' => 'Data Pelanggan Berhasil Dihapus']);  
         }
}