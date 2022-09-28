<?php

namespace App\Http\Controllers;

use App\Models\kamar;
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
        
        $kamar = kamar::with('kategori')->paginate(5)->fragment('kamar');
        // dd($kamar);
        // $kamar = Kamar::all();
        $kategori = Kategori::all();
        return view('admin.kamar.index',compact('kamar','kategori'));
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
            'kategori_id' => 'required',
            'foto_kamar' => 'required',
            // 'harga' => 'required',
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
