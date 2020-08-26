<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\Cadmin;
use Auth;
use App\Contact;
use App\News;

class PagesController extends Controller
{
    public function index()
    {
      $news = News::all()->sortByDesc('created_at')->take(3);
      $clubs = Cadmin::all()->sortByDesc('points')->take(5);
 	   return view('index')->with('clubs',$clubs)
                                    ->with('news',$news);
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
      $admins = Cadmin::all()->sortByDesc('points');
        return view('pages.pointtb')
                  ->with('Users',$admins);
  }
  public function store(Request $request)
  {
     $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->designation = $request->input('designation');
        $contact->comment = $request->input('comments');
        $contact->save();
        return redirect('/')->with('success','Response Subbmitted');
  }
  public function mail()
  {
    $mails = Contact::all()->sortByDesc('id');
    return view('pages.mail')->with('mails',$mails);
  }

}
