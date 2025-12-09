<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    function showData(){
        $materials = Material::all();
        return view('post', compact('materials'));
    }

    function show(Material $material){

        $sd = Grade::whereBetween('id', [1,6])->get();
        $smp = Grade::whereBetween('id', [7,9])->get();
        $sma = Grade::whereBetween('id', [10,12])->get();

        return view('show', compact('material', 'sd', 'smp', 'sma'));
    }
}
