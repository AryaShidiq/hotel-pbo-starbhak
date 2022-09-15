<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function indexkamar()
    {
        $kamar = kamar::all();
        return view('admin.kamar.index',compact('kamar'));
    }

    public function createkamar()
    {
        $kamar = kamar::all();
        return view('admin.kamar.create',compact('kamar'));
    }

    public function storekamar(Request $request)
    {
        $this->validate($request,[
            'no_kamar' => 'required',
            'tipe_kamar' => 'required',
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

    public function editkamar($id)
    {

        $kamar = kamar::find($id);
        return view('admin.kamar.edit',compact('kamar'));
    }

    public function updatekamar(Request $request,$id)
    {
        $kamar = kamar::find($id);
        $kamar->update($request->all());
        if($request->hasFile('foto_kamar')){
            $request->file('foto_kamar')->move('fotokamar/', $request->file('foto_kamar')->getClientOriginalName());
            $kamar->foto_kamar = $request->file('foto_kamar')->getClientOriginalName();
            $kamar->save(); 
        }
        return redirect('/admin/kamar');

    }

    public function deletekamar($id)
    {
        $kamar = kamar::find($id);
        $kamar->delete();
        return redirect('/admin/kamar');
    }

}
