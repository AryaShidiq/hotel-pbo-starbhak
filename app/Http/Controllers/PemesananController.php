<?php

namespace App\Http\Controllers;

use App\Models\FasilitasUmum;
use App\Models\Kamar;
use App\Models\Kategori;
use App\Models\Resepsionis;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $fasum = FasilitasUmum::all();
        $kategori = Kategori::all();
        $kamar = Kamar::all();
        return view('user.index',[
            'fasum' => $fasum,
            'kamar' => $kamar,
            'kategori' => $kategori,
        ]);
    }
    public function kamar()
    {
        $kamar = Kamar::all();
        $kategori = Kategori::all();
        return view('user.kamar', compact('kamar','kategori'));
    }
    public function fasum()
    {
        $fasum = FasilitasUmum::all();
        return view('user.fasum', compact('fasum'));
    }
    public function insertpesan(Request $request){
        Resepsionis::create($request->all());   
        return redirect('/dashboard')->with('success', 'Data Berhasil Ditambahkan');
    }
}

