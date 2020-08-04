<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

    public function about_leo()
    {
    	return view('pages.about_leo');
    }
    
    public function leo_clubs()
    {
      $clubs = DB::select('select * from leo_clubs');
      return view('pages.leo_clubs',['clubs'=>$clubs]);
    }
}
