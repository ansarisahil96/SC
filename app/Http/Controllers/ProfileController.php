<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\upload;

class ProfileController extends Controller
{
  public function index($name)
  {
      $uploads=upload::latest()->paginate(2);
      return view('profile.profilehome',compact('uploads'));


  }
}
