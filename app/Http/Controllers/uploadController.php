<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pdf;
use App\branch;
use App\semester;
use App\subject;
use App\upload;
use App\User;



class uploadController extends Controller
{
    public function store()
    {
        $branches=branch::all();
        $semesters=semester::all();
        $subjects=subject::all();
        return view('upload',compact('branches','semesters','subjects'));
    }
    public function upload(Request $request)
    {
      $uploadfile= $request->file('fileUpload')->store('pdfs');

      $request->validate([
        'fileUpload' => 'required|mimes:pdf'
      ]);

      upload::create([
        'subject_name'=>$request->subject_name,
        'branch_name'=>$request->branch_name,
        'semester_name'=>$request->semester_name,
        'user_id'=>auth()->user()->id,
        'file'=>$uploadfile,
        'description'=>$request->description,
        'year'=>$request->year

      ]);

      return redirect('home');

    }
}
