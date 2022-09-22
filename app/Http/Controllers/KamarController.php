<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexkamar()
    {
        $kamar = Kamar::paginate(5)->onEachSide(4)->fragment('kamar');
        return view('admin.kamar.index',compact('kamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createkamar()
    {
        $kategori = Kategori::all();
        return view('admin.kamar.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storekamar(Request $request)
    {
        $this->validate($request,[
            'no_kamar' => 'required',
            'tipe_kamar_id' => 'required',
            'jumlah' => 'required',
            'foto_kamar' => 'required',
        ]);
        $kamar = kamar::create($request->all());
        if($request->hasFile('foto_kamar')){
            $request->file('foto_kamar')->move('fotokamar/', $request->file('foto_kamar')->getClientOriginalName());
            $kamar->foto_kamar = $request->file('foto_kamar')->getClientOriginalName();
            $kamar->save(); 
        }
        return redirect('/admin/kamar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function show(Kamar $kamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function editkamar($id)
    {
        $kamar = Kamar::find($id);
        $kategori = Kategori::all();
        return view('admin.kamar.edit',compact('kamar','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function updatekamar(Request $request,$id)
    {
        $kamar = Kamar::find($id);
        $kamar->update($request->all());
        if($request->hasFile('foto_kamar')){
            $request->file('foto_kamar')->move('fotokamar/', $request->file('foto_kamar')->getClientOriginalName());
            $kamar->foto_kamar = $request->file('foto_kamar')->getClientOriginalName();
            $kamar->save(); 
        }
        return redirect('/admin/kamar');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function deletekamar($id)
    {
        $kamar = Kamar::find($id);
        $kamar->delete();
        return redirect('/admin/kamar');
    }
}
