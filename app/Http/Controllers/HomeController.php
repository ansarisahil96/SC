<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pdf;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pdfs=pdf::latest()->paginate(2);
        return view('home',compact('pdfs'));
    }
}
