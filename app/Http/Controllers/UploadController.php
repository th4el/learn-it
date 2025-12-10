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
            //validate
            
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

            
            //perlu "php artisan storage:link" dulu agar dapat tersimpan di public\storage\materials dan bs diakses browser
            $filepath = $request->file('file')->store('materials', 'public');

            // read db untuk record dengan nama yg sesuai dgn hasil form
            $category = Category::where('name', $validatedData['subject'])->firstOrFail();
            $grade = Grade::where('name', $validatedData['grade'])->firstOrFail();
            
            // create record
            Material::create([  
                'teacher_id' => Auth::id(),
                'grade_id' => $grade->id,
                'category_id' => $category->id,
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'pdf_path' => $filepath,
            ]);

            // debug hasil
            // dd(Material::latest()->first());


        
        return redirect()->route('upload.index');
    }
}
