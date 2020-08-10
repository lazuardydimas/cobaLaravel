<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tanya;

class MempertanyakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanya = Tanya::all();
        return view('pertanyaan/index',compact('tanya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaan/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validasi eror
        $request->validate([
        'akun' => 'required',
        'judul' => 'required|unique:pertanyaan',
        'isi' => 'required'
        ]);

        $tanya=Tanya::create([
            'profil_id' => $request['akun'],
            'judul' => $request['judul'],
            'isi' => $request['isi']
        ]);

        return redirect('/mempertanyakan')->with('success','Pertanyaan baru berhasil ditambahkan');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($pertanyaan_id)
    {
        $tanya = Tanya::find($pertanyaan_id);

        return view('pertanyaan/show',compact('tanya'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($pertanyaan_id)
    {
        $tanya = Tanya::find($pertanyaan_id);

        return view('pertanyaan/edit',compact('tanya'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pertanyaan_id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);

        $update = Tanya::where('id',$pertanyaan_id)->update([
            'judul' => $request['judul'],
            'isi' => $request['isi']
        ]);

        return redirect('/mempertanyakan')->with('success','Berhasil diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pertanyaan_id)
    {
        Tanya::destroy($pertanyaan_id);

        return redirect('/mempertanyakan')->with('success','Berhasil dihapus..!');
    }
}
