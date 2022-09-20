<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Biodata;
use App\Models\Biodata;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function proses_login(Request $request)
    {
        $sukses = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        // dd($request);
        if(Auth::attempt($sukses)){
            $request->session()->regenerate();
            $biodata = Biodata::where('user_id', Auth()->User()->id)->first();
            if(empty($biodata->user_id)){
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->intended('/dashboard/profil');
            }
        }

        return back()->with('LoginError','Login Gagal');

    }

    public function proses_logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
