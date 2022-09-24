<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexkategori()
    {
        $kategori = Kategori::paginate(5)->onEachSide(4)->fragment('kategori');
        // $kategori = Kategori::paginate(5)->onEachSide(4)->fragment('kategori');
        return view('admin.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createkategori()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storekategori(Request $request)
    {
        $this->validate($request,[
            'tipe_kamar' => 'required',
            'jumlah' => 'required',
        ]);
        Kategori::create($request->all());
        return redirect('/admin/kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function editkategori($id)
    {
        $kategori = Kategori::find($id);
        return view('admin.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function updatekategori(Request $request,$id)
    {
        $kategori = Kategori::find($id);
        $kategori->update($request->all());
        return redirect('/admin/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function deletekategori($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect('/admin/kategori');
    }
}
