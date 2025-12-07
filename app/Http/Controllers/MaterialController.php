<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    function showData(){
        $materials = Material::all();
        return view('post', compact('materials'));
    }
}
