<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cadmin;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth:admins,cadmin');

    }
    
    public function index()
    {
       
        $user_id = Auth::guard('cadmin')->user()->id;
        $cadmin = Cadmin::find($user_id);
        return view('users.index')
                    ->with('Users', $cadmin->users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.register');
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
            'profile_image' => 'image|nullable|max:1999',
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

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $user->cadmin_id = Auth::guard('cadmin')->user()->id;
        $user->profile_image = $fileNameToStore;
        $user->save();

        return redirect('user')->with('success','User Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $User = User::find($id);
        return view('users.show')->with('User',$User);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $User = User::find($id);
        return view('users.edit')->with('User',$User);
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
         $User = User::find($id);
        //Check for correct user
        $User->delete();
        if(Auth::guard('cadmin'))
            return redirect('/user')->with('success', 'User has been Removed');
        else
            return redirect('/userall')->with('success', 'User has been Removed');

    }
}