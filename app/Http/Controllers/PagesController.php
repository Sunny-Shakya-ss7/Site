<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
 	   return view('index');
    }

     public function userindex()
     {
		return view('dashboard');
    }

     public function about()
     {
    	return view('pages.about');
    }
    
    public function testimonial()
    {
    	return view('pages.testimonial');
    }
    
}
