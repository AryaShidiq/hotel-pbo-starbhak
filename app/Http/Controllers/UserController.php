<?php

namespace App\Http\Controllers;

use App\Models\FasilitasUmum;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexuser()
    {
       $fasum = FasilitasUmum::all();
       return view('user.fasum',compact('fasum')); 
    }
}
