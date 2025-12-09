<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\User;
use Illuminate\Support\Facades\Auth; 
use App\Models\Category;
use App\Models\Grade;

class UploadController extends Controller
{   

    public function index(){
        return view('guru.upload');
        
    }


    public function store(Request $request) {
            //mempermudah validate
           
            // $subject_val = ['math','science','english','bahasa_indonesia','religion','PKN'];
            

            
            $validatedData = $request->validate([
                'file' => [
                    'required',
                    'file', 
                    'mimes:pdf,doc,docx,ppt,pptx,txt',
                    'max:5120', //max 5MB
                ],
                
                'title' => [
                    'required',
                    'string',
                    'max:255',
                ],

                'description' => [
                    'required',
                    'string',
                    'max:255',
                ],

                'grade' => [
                    'required',
                    'exists:grades,name',
                ],

                'subject' => [
                    'required',
                    'exists:categories,name',
                    
                ]
            ]);

            
        
            $filepath = $request->file('file')->store('materials', 'public');

            $category = Category::where('name', $validatedData['subject'])->firstOrFail();
            $grade = Grade::where('name', $validatedData['grade'])->firstOrFail();
            
            Material::create([  
                'teacher_id' => Auth::id(),
                'grade_id' => $grade->id,
                'category_id' => $category->id,
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'pdf_path' => $filepath,
            ]);

            dd(Material::latest()->first());


        
        return redirect()->route('upload.index');
    }
}
