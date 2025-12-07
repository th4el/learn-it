<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    function index(){
        $materials = Material::all();
        return view('guru.home', compact('materials'));
    }
}
