<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;

class ExploreController extends Controller
{
    public function explore(){
        $sd = Grade::whereBetween('id', [1,6])->get();
        $smp = Grade::whereBetween('id', [7,9])->get();
        $sma = Grade::whereBetween('id', [10,12])->get();

        return view('explore', compact('sd', 'smp', 'sma'));
    }
}
