<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Grade;
use App\Models\Material;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Request $request){
        $gradeId = (int) $request->query('grade', 1);
        $categoryId = (int) $request->query('category');

        if(!$categoryId){
            return redirect()->route('explore', ['grade' => $gradeId])->with('error', 'Kategori belum dipilih.');
        }

        $grade = Grade::findOrFail($gradeId);
        $category = Category::findOrFail($categoryId);

        $sd = Grade::whereBetween('id', [1,6])->get();
        $smp = Grade::whereBetween('id', [7,9])->get();
        $sma = Grade::whereBetween('id', [10,12])->get();

        if($grade->id <= 6){
            $level = 'SD';
        } elseif($grade->id <= 9){
            $level = 'SMP';
        } else {
            $level = 'SMA';
        }

        $materials = Material::with(['teacher', 'category', 'grade'])->where('grade_id', $gradeId)->where('category_id', $categoryId)
        ->orderByDesc('created_at')->paginate(10);

        return view('posts', compact('materials', 'grade', 'category', 'level', 'sd', 'smp', 'sma'));
    }
}
