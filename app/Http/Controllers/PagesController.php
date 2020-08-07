<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

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
    public function pointtb()
    {
      $users = User::orderBy('points','desc')->paginate(40);
      return view('pages.pointtb')->with('Users',$users);
    }
}
