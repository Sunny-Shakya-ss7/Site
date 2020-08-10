<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\News;
use Auth;
use DB;

class NewsController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth:cadmin,admins', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('id','desc')->paginate(10);
        return view('news.index')->with('news',$news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
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
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999',
        ]);

        if($request->hasFile('file')){
            foreach ($request->file as $file) {
                $filenameWithExt = $file->getClientOriginalName();
                //Get just file name
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //Get just extension
                $extension = $file->getClientOriginalExtension();
                //File name to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                //Upload Image
                $path = $file->storeAs('public/news',$fileNameToStore);

                $data[] = $fileNameToStore;
            }
            
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $news = new News;
        $news->title = $request->input('title');
        $news->slug = $request->input('slug');
        $news->body = $request->input('body');
        $news->cadmin_id = auth()->user()->id;
        $news->club_name = auth()->user()->club_name;
        $news->cover_image = json_encode($data);
        $news->save();

        return redirect('/news')->with('success','News/Event has been Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $new = News::find($id);
        return view('news.show')->with('new',$new);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new = News::find($id);
        return view('news.edit')->with('new',$new);
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
        $this-> validate($request,[
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999',
            'signature' => 'required'
              ]);

             if($request->hasFile('cover_image')){
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //File name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/news',$fileNameToStore);
            }

     
        $news =  News::find($id);
        $news->title = $request->input('title');
        $news->slug = $request->input('slug');
        $news->body = $request->input('body');
        $news->user_id = auth()->user()->id;
        $news->signature = $request->input('signature');
        if($request->hasFile('cover_image'))
            $news->cover_image = $fileNameToStore;
        $news->save();

        return redirect('/news')->with('success','News/Event has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        //Check for correct user
        $news->delete();

        return redirect('/news')->with('success', 'News/Event has been Removed');
    }
}
