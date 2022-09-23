<?php

namespace App\Http\Controllers;

use App\Models\Resepsionis;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index (){

        $data = Resepsionis::all();
        return view('user.viewpesan',[
            'data' => $data
        ]);
    }   

    public function tambahpesanan(){
        return view('user.tambahviewguru',);
    }

    public function insertdataview(Request $request){
        $data = Resepsionis::create($request->all());   
        return redirect()->route('pemesanan')->with('success', 'Data Berhasil Ditambahkan');
    }
}
