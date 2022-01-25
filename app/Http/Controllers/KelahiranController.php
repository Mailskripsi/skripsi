<?php

namespace App\Http\Controllers;

use App\Models\Kelahiran;
use Illuminate\Http\Request;

class KelahiranController extends Controller
{
    //
    public function index(){

        $data = Kelahiran::all();
        // dd($data);
        return view('datakelahiran')->with(compact('data'));
        // return view('datakelahiran',compact('data'));
    }

    public function tambahkelahiran(){
        return view('tambahkelahiran');
    }

    public function insertkelahiran(Request $request){
        
        Kelahiran::create($request->all());
        return redirect()->route('kelahiran')->with('success','Data Berhasil Ditambahkan');
    }

    public function tampilkandata($id){

        $data = Kelahiran::find($id);
        dd($data);
    }
}
