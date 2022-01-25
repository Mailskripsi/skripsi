<?php

namespace App\Http\Controllers;

use App\Models\Perpindahan;
use Illuminate\Http\Request;

class PerpindahanController extends Controller
{
    //
    public function index(){

        $data = Perpindahan::all();
        // dd($data);
        return view('dataperpindahan')->with(compact('data'));
        // return view('dataperpindahan',compact('data'));
    }

    public function tambahperpindahan(){
        return view('tambahperpindahan');
    }

    public function insertperpindahan(Request $request){
        
        Perpindahan::create($request->all());
        return redirect()->route('perpindahan')->with('success','Data Berhasil Ditambahkan');
    }

    public function tampilkandata($id){

        $data = Perpindahan::find($id);
        dd($data);
    }
}
