<?php

namespace App\Http\Controllers;

use App\Models\Kematian;
use Illuminate\Http\Request;

class KematianController extends Controller
{
    //
    public function index(){

        $data = Kematian::all();
        // dd($data);
        return view('datakematian')->with(compact('data'));
        // return view('datakematian',compact('data'));
    }

    public function tambahkematian(){
        return view('tambahkematian');
    }

    public function insertkematian(Request $request){
        
        Kematian::create($request->all());
        return redirect()->route('kematian')->with('success','Data Berhasil Ditambahkan');
    }

    public function tampilkandata($id){

        $data = Kematian::find($id);
        dd($data);
    }
}
