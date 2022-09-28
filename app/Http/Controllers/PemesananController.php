<?php

namespace App\Http\Controllers;

use App\Models\FasilitasUmum;
use App\Models\Kamar;
use App\Models\Kategori;
use App\Models\Resepsionis;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


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
        return redirect('/dashboard')->with('success', 'Proses Booking Sukses! <br> <a href="/cetakbukti/{{id}}">Silahkan Download Bukti Reservasi</a> ');
        // return redirect('/dashboard');
        // return redirect('/dashboard')->alert()->html('<i>HTML</i> <u>example</u>'," You can use <b>bold text</b>, <a href='//github.com'>links</a> and other HTML tags ",'success');
        ;
    }
    public function cetakbukti($id)
    {
        $data = Resepsionis::all();
        // $data = Resepsionis::find($id);
        // $kategori = Kategori::all();
        view()->share('data',$data);
        $cetak = PDF::loadview('user.bukti-pdf');
        return $cetak->download('bukti-reservasi.pdf');
        // $data = Resepsionis::find($id);
        // return view('user.bukti-pdf');
    }
}

