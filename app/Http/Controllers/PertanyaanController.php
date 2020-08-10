<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Tanya;

class PertanyaanController extends Controller
{
    public function index(){
        // $isi= DB::table('pertanyaan')->get();//Select * from pertanyaan
        $tanya = Tanya::all();

        return view('pertanyaan/index',compact('tanya'));
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

        // $query= DB::table('pertanyaan')->insert([    //$query disini variabel bebass
        //     "profil_id"=> $request["akun"],
        //     "judul"=> $request["judul"],
        //     "isi"=> $request["isi"]
        //     ]);
            // $tanya= new Tanya;
            // $tanya->profil_id = $request["akun"];
            // $tanya->judul = $request["judul"];
            // $tanya->isi = $request["isi"];
            // $tanya->save();
            //atau pake ini

            $tanya=Tanya::create([
                'profil_id' => $request['akun'],
                'judul' => $request['judul'],
                'isi' => $request['isi']
            ]);

            return redirect('/pertanyaan')->with('success','Pertanyaan baru berhasil ditambahkan');
    }

    public function show($pertanyaan_id){
        // $tanya = DB::table('pertanyaan')->where('id',$pertanyaan_id)->first();
        $tanya = Tanya::find($pertanyaan_id);

        return view('pertanyaan/show',compact('tanya'));
    }

    public function edit($pertanyaan_id){
        // $tanya = DB::table('pertanyaan')->where('id',$pertanyaan_id)->first();
        $tanya = Tanya::find($pertanyaan_id);

        return view('pertanyaan/edit',compact('tanya'));
    }

    public function update($pertanyaan_id,Request $request){
        $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);

        // $query = DB::table('pertanyaan')
        //         ->where('id',$pertanyaan_id)
        //         ->update([
        //             'judul'=>$request['judul'],
        //             'isi' =>$request['isi']
        //         ]);
        $update = Tanya::where('id',$pertanyaan_id)->update([
            'judul' => $request['judul'],
            'isi' => $request['isi']
        ]);

        return redirect('/pertanyaan')->with('success','Berhasil diupdate !');
    }

    public function destroy($pertanyaan_id){
        // $query= DB::table('pertanyaan')->where('id',$pertanyaan_id)->delete();
        Tanya::destroy($pertanyaan_id);

        return redirect('/pertanyaan')->with('success','Berhasil dihapus..!');
    }
}
