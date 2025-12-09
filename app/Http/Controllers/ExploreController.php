<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Material;

class ExploreController extends Controller
{
    public function index(Request $request){

        $gradeId = $request->query('grade', 1);

        $grade = Grade::findOrFail($gradeId);

        $categories = Category::whereHas('materials', function ($q) use ($grade) {
            $q->where('grade_id', $grade->id);
        })->distinct()->get();
        
        $sd = Grade::whereBetween('id', [1,6])->get();
        $smp = Grade::whereBetween('id', [7,9])->get();
        $sma = Grade::whereBetween('id', [10,12])->get();

        if($grade->id <= 6){
            $level = 'SD';
        } elseif($grade->id <= 9) {
            $level = 'SMP';
        } else {
            $level = 'SMA';
        }

        return view('explore', compact('categories', 'sd', 'smp', 'sma', 'level', 'grade'));
    }
}
