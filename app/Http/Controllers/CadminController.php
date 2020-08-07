<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cadmin;

class CadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth:admins')->except('index');
    }
    
    public function index()
    {
        return view('profiles.cprofile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.cregister');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this-> validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'confim_password' => 'required_with:password|same:password|min:8',
            'profile_image' => 'image|nullable|max:2048',
            'club_name' => 'required',
            'club_post' => 'required'
        ]);

         if($request->hasFile('profile_image')){
            $filenameWithExt = $request->file('profile_image')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('profile_image')->getClientOriginalExtension();
            //File name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('profile_image')->storeAs('public/profile',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $cadmin = new Cadmin([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'dob' => $request->dob,
            'club_name' => $request->club_name,
            'club_post' => $request->club_post,
        ]);
        $cadmin->profile_image = $fileNameToStore;
        $cadmin->save();

        return redirect('userall')->with('success','Admin Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Cadmin = Cadmin::find($id);
        return view('users.cshow')->with('Cadmin',$Cadmin);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $Cadmin = Cadmin::find($id);
        //Check for correct user
        $Cadmin->delete();

        return redirect('/userall')->with('success', 'Admin has been Removed');
    }
}
