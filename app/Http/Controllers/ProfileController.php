<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\upload;

class ProfileController extends Controller
{
  public function index($id,$name)
  {

      $uploads=Upload::where('user_id',$id)->paginate(2);
      

      return view('profile.profilehome',compact('uploads'));


  }
}
