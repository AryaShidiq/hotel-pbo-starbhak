<?php

namespace App\Http\Controllers;

use App\Models\FasilitasUmum;
use App\Models\kamar;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexfasumuser()
    {
       $fasum = FasilitasUmum::all();
       return view('user.fasum',compact('fasum')); 
    }
    
    function indexkamaruser()
    {
        $kamar_user = kamar::all();
        return view('user.kamar', compact('kamar_user'));
    }
}
