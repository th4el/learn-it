<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function index(){
        return view('login');
    }

    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],
        [
            'email.required' => "Email wajib diisi",
            'password.required' => "Password wajib diisi",
        ]);

        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infoLogin)){
            $user = Auth::user();
            if($user->role == 'guru'){
                return redirect('/guru');
            } elseif($user->role == 'murid'){
                return redirect('/murid');
            } else {
                Auth::logout();
                return redirect('/login')->withErrors(['login' => 'Role tidak dikenali']);
            }
        } else{
            return redirect('/login')->withErrors(['login' => "Username dan password yang dimasukkan tidak sesuai"])->withInput();
        }
        
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login')->with('success', 'Anda berhasil logout');

    }
}
