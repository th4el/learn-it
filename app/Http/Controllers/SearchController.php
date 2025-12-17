<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class SearchController extends Controller
{



    public function index(Request $request){

        // validation

     

        
        $search = trim($request->input('search',''));

        if($search ===''){
            return redirect()->route('home');
        }

      $materials = Material::with('teacher')
        ->where('title','like',"%{$search}%")
        ->paginate(5)->withQueryString();

        // dd($request);
      return view('search_result', compact('materials',));
        
    }
}
