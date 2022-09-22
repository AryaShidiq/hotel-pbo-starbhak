<?php

namespace App\Http\Controllers;

use App\Models\Resepsionis;
use Illuminate\Http\Request;

class ResepsionisController extends Controller
{
    public function indexresep(Request $request)
    {
        $cari = $request->query('cari');

        if(!empty($cari)){
            $datapemesanan = Resepsionis::sortable()
            ->where('resepsionis.nama_pemesan','like','%'.$cari.'%')
            ->orWhere('resepsionis.check_in','like','%'.$cari.'%')
            ->paginate(5)->onEachSide(4)->fragment('pemesanan');

        }else{
            $datapemesanan =Resepsionis::sortable()->paginate(5)->onEachSide(4)->fragment('pemesanan');
        }

        // $resepsionis = Resepsionis::sortable()->paginate(5)->onEachSide(4)->fragment('pemesanan');
        // return view('resepsionis.index',compact('resepsionis'));
        return view('resepsionis.index')->with([
            'resepsionis' => $datapemesanan,
            'cari' => $cari,
        ]);
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
        Resepsionis::create($request->all());
        return redirect('/resepsionis');
    }

    public function editresep($id)
    {

        $resepsionis = Resepsionis::find($id);
        return view('resepsionis.edit',compact('resepsionis'));
    }

    public function updateresep(Request $request,$id)
    {
        $resepsionis = Resepsionis::find($id);
        $resepsionis->update($request->all());
        return redirect('/resepsionis/pemesanan');

    }

    public function deleteresep($id)
    {
        $resepsionis = Resepsionis::find($id);
        $resepsionis->delete();
        return redirect('/resepsionis/pemesanan');
    }
}
