<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Gallery;
use Auth;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:cadmin,admins', ['except' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pics = Gallery::all();
        return view('pages.gallery')->with('pics',$pics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
            'image_upload' => 'image|required|max:2048',
            'caption' => 'required'
        ]);

        if($request->hasFile('image_upload')){
            $filenameWithExt = $request->file('image_upload')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('image_upload')->getClientOriginalExtension();
            //File name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('image_upload')->storeAs('public/gallery',$fileNameToStore);
        }

        $gallery = new Gallery;
        $gallery->caption = $request->input('caption');
        $gallery->image_upload = $fileNameToStore;
        $gallery->uploaded_by = Auth::guard('cadmin')->user()->name;
        $gallery->cadmin_id = Auth::guard('cadmin')->user()->id;
        $gallery->save();

        return redirect('/gallery')->with('success','Photo has been Uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pic = Gallery::find($id);
        if($pic->image_upload != 'noimage.jpg')
                    Storage::delete('storage/gallery/'.$pic->image_upload);
        $pic->delete();
        return redirect('/gallery')->with('success', 'Photo has been Removed');
    }

}
