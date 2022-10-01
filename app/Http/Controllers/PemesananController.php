<?php

namespace App\Http\Controllers;

use App\Models\FasilitasUmum;
use App\Models\Kamar;
use App\Models\Kategori;
use App\Models\Resepsionis;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $kategori = Kategori::all();
        return view('user.fasum', compact('fasum','kategori'));
    }
    public function insertpesan(Request $request){
        // Resepsionis::create($request->all());
        Resepsionis::creating(function($resepsionis){
            $resepsionis->add_by = auth()->id();
        });
        Resepsionis::create($request->all());
        // $resep['add_by'] = $resep->add_by->name;    
        return redirect('/')->with('success', 'Proses Booking Sukses! <br> <a href="/data-reservasi">Silahkan Download Bukti Reservasi</a> ');
        // return redirect('/dashboard');
        // return redirect('/dashboard')->alert()->html('<i>HTML</i> <u>example</u>'," You can use <b>bold text</b>, <a href='//github.com'>links</a> and other HTML tags ",'success');
        ;
    }
    // public function dataresv($id)
    // {
    //    $user = User::find($id);
    //    $data = Resepsionis::where('user_id',$user->id)->paginte(5);
    //    return view('user.reservasi', compact('data'));
    // }
    public function dataresv(Request $request)
    {
    //    $user = Auth::user();
        // $user = Auth::user()->id;
        // var_dump($user);
    //    $data = Resepsionis::where('add_by',$user);
        $user = Auth::id();
        $kategori = Kategori::all();
        $data  = Resepsionis::where('add_by','=', $user)->get();
        return view('user.reservasi', compact('data','kategori'));
    }
    public function cetakbukti($id)
    {
        $user = Auth::id();
        $data = Resepsionis::find($id)->where('add_by','=', $user)->get();
        // $data = Resepsionis::where('add_by','=', $user,'AND','id','=',$id)->get();
        // $data = Resepsionis::find($id);
        // $kategori = Kategori::all();
        view()->share('data',$data);
        $cetak = PDF::loadview('user.bukti-pdf');
        return $cetak->download('bukti-reservasi.pdf');
        // $data = Resepsionis::find($id);
        // return view('user.bukti-pdf');
    }
}

