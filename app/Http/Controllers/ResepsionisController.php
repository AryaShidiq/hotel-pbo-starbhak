<?php

namespace App\Http\Controllers;

use App\Models\Resepsionis;
use Illuminate\Http\Request;

class ResepsionisController extends Controller
{
    public function indexresep()
    {
        $resepsionis = Resepsionis::all();
        return view('resepsionis.index',compact('resepsionis'));
    }

    public function createresep()
    {
        return view('resepsionis.create');
    }

    public function storeresep(Request $request)
    {
        $this->validate($request,[
            'nomor_pemesanan' => 'required',
            'nama_pemesan' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
            'nomor_kamar' => 'required',
            'status' => 'required',
        ]);
        $resepsionis = Resepsionis::create($request->all());
        return redirect('/resepsionis/pemesanan');
    }
}
