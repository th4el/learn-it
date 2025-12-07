<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function showRegister(){
        $grades = Grade::all();

        return view('register', compact('grades'));
    }

    function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required',
            'grade_id' => 'nullable|required_if:role,murid'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'grade_id' => $request->role === 'murid' ? $request->grade_id : null
        ]);

        return redirect('/login')->with('success', 'Register berhasil, silahkan login!');
    }
}
