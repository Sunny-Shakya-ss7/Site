<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cadmin;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admins');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('profiles.admin');
    }
    public function userall()
    {
        $Users = User::orderBy('created_at','desc')->paginate(20);
        $Cadmins = Cadmin::orderby('created_at','desc')->paginate(20);
            return view('users.adminview')
                        ->with('Users', $Users)
                        ->with('Cadmins',$Cadmins);
    }
    public function points(Request $request,$id)
    {
        $cadmin = Cadmin::find($id);
        $cadmin->points = $cadmin->points + $request->points;
        $cadmin->save();
        return redirect('cadmin/'.$id)->with('success',$request->points.' Points Added');
    }
    public function delete($id)
  {
    $mails = Contact::find($id);
    $mails->destroy();
    return redirect('/mailbox')->with('success','Mail Deleted');
  }
}
