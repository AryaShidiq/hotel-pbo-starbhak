<?php

namespace App\Http\Controllers;

use App\Models\Resepsionis;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function insertpesan(Request $request){
        $data = Resepsionis::create($request->all());   
        return redirect()->route('/dashboard')->with('success', 'Data Berhasil Ditambahkan');
    }
}

