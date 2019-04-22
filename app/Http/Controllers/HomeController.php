<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Symptom;
use App\Profile;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
      
        return view('home');
        
    }
    public function profile()
    {
       
      
        return view('profile.profile');
        
    }
}
