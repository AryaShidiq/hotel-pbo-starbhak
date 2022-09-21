<?php

namespace App\Http\Controllers;

use App\Models\FasilitasUmum;
use Illuminate\Http\Request;

class FasumController extends Controller
{
    public function indexfasum()
    {
        $fasum = FasilitasUmum::all();
        return view('admin.fasilitasumum.index',compact('fasum'));
    }

    public function createfasum()
    {
        return view('admin.fasilitasumum.create');
    }

    public function storefasum(Request $request)
    {
        $this->validate($request,[
            'nama_fasum' => 'required',
            'keterangan' => 'required',
            'foto' => 'required',
        ]);
        $fasum = FasilitasUmum::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fasilitasumum/', $request->file('foto')->getClientOriginalName());
            $fasum->foto = $request->file('foto')->getClientOriginalName();
            $fasum->save(); 
        }
        return redirect('/admin/fasum');
    }

    public function editfasum($id)
    {
        $fasum = FasilitasUmum::find($id);
        return view('admin.fasilitasumum.edit',compact('fasum'));
    }

    public function updatefasum(Request $request,$id)
    {
        $fasum = FasilitasUmum::find($id);
        $fasum->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fasilitasumum/', $request->file('foto')->getClientOriginalName());
            $fasum->foto = $request->file('foto')->getClientOriginalName();
            $fasum->save(); 
        }
        return redirect('/admin/fasum');

    }
    
    public function deletefasum($id)
    {
        $fasum = FasilitasUmum::find($id);
        $fasum->delete();
        return redirect('/admin/fasum');
    }
}
