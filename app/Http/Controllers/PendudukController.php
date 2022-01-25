<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    //
    public function index(){

        $data = Penduduk::all();
        // dd($data);
        return view('datapenduduk')->with(compact('data'));
        // return view('datapenduduk',compact('data'));
    }

    public function tambahpenduduk(){
        return view('tambahpenduduk');
    }

    public function insertpenduduk(Request $request){
        
        Penduduk::create($request->all());
        return redirect()->route('penduduk')->with('success','Data Berhasil Ditambahkan');
    }

    public function tampilkandata($id){

        $data = Penduduk::find($id);
        dd($data);

        return view('edit.tampilpenduduk', compact('data'));
    }
    public function detail_penduduk($id)
    {
        $data = Penduduk::find($id);
        return view('detail.penduduk_detail', compact('data'));
    }
}
