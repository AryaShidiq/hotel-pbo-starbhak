<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.register', [
            // 'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);
        $request->session()->flash('success', 'Berhasil Registrasi Silakan Login');
        return redirect('/');

    }
}
