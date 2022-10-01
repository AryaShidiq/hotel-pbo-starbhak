<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Resepsionis;
use App\Models\User;
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
            ->orderBy('created_at','desc')->paginate(5)->onEachSide(4)->fragment('pemesanan');

        }else{
            $datapemesanan =Resepsionis::sortable()->orderBy('created_at','desc')->paginate(5)->onEachSide(4)->fragment('pemesanan');
        }

        // $resepsionis = Resepsionis::sortable()->paginate(5)->onEachSide(4)->fragment('pemesanan');
        // return view('resepsionis.index',compact('resepsionis'));
        $kategori = Kategori::all();
        $user = User::all();
        return view('resepsionis.index')->with([
            'resepsionis' => $datapemesanan,
            'cari' => $cari,
            'kategori' => $kategori,
            'user' => $user,
        ]);
    }

    public function createresep()
    {
        $kategori = Kategori::all();
        return view('resepsionis.create',compact('kategori'));
    }

    public function storeresep(Request $request)
    {
        // $this->validate($request,[
        //     'nomor_pemesanan' => 'required',
        //     'nama_pemesan' => 'required',
        //     'check_in' => 'required',
        //     'check_out' => 'required',
        //     'kategori_id' => 'required',
        //     'status' => 'required',
        // ]);
        Resepsionis::creating(function($resepsionis){
            $resepsionis->add_by = auth()->id();
        });
        Resepsionis::create($request->all());
        return redirect('/resepsionis');
    }

    public function editresep($id)
    {
        $resepsionis = Resepsionis::find($id);
        $kategori = Kategori::all();
        return view('resepsionis.edit',compact('resepsionis','kategori'));
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
