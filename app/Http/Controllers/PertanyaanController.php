<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function index(){
        $isi= DB::table('pertanyaan')->get();//Select * from pertanyaan
        // dd($isi);
        return view('pertanyaan/index',compact('isi'));
    }

    public function create(){
        return view('pertanyaan/create');
    }

    public function store(Request $request){

        //Validasi eror
        $request->validate([
            'akun' => 'required',
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'
        ]);

        $query= DB::table('pertanyaan')->insert([    //$query disini variabel bebass
            "profil_id"=> $request["akun"],
            "judul"=> $request["judul"],
            "isi"=> $request["isi"]
            ]);
            return redirect('/pertanyaan')->with('success','Pertanyaan baru berhasil ditambahkan');
    }

    public function show($pertanyaan_id){
        $satuan = DB::table('pertanyaan')->where('id',$pertanyaan_id)->first();
        return view('pertanyaan/show',compact('satuan'));
    }

    public function edit($pertanyaan_id){
        $satuan = DB::table('pertanyaan')->where('id',$pertanyaan_id)->first();
        return view('pertanyaan/edit',\compact('satuan'));
    }

    public function update($pertanyaan_id,Request $request){
        $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);

        $query = DB::table('pertanyaan')
                ->where('id',$pertanyaan_id)
                ->update([
                    'judul'=>$request['judul'],
                    'isi' =>$request['isi']
                ]);

        return redirect('/pertanyaan')->with('success','Berhasil diupdate !');
    }

    public function destroy($pertanyaan_id){
        $query= DB::table('pertanyaan')->where('id',$pertanyaan_id)->delete();
        return redirect('/pertanyaan')->with('success','Berhasil dihapus..!');
    }
}
