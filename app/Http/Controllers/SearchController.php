<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\branch;
use App\semester;
use App\subject;
use App\upload;
use App\User;

class SearchController extends Controller
{
  public function index()
  {
    $branches=branch::all();
    $semesters=semester::all();
    $subjects=subject::all();


      return view('/search',compact('branches','semesters','subjects'));


  }

  public function search(Request $request)
  {

    $uploads=Upload::where('branch_name',$request->branch_name)->paginate(2);
    return view('search.result',compact('uploads'));

  }

}
