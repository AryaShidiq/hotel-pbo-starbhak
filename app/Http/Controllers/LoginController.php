<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.login', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if (auth()->user()->role == 'admin') {
                return redirect ('/admin/kamar');
            }else if (auth()->user()->role == 'resepsionis') {
                return redirect ('/resepsionis');
            }else if (auth()->user()->role == 'user'){
                return redirect ('/dashboard');
            }else{
                return redirect('/login');
            }   
            
        }
        
        // return redirect()->intended('/dashboard');
        return back()->with('loginerror', 'Login Gagal');
        
    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
