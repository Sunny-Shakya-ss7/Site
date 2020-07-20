<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Community\Posts;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admins', ['only' => 'update','destroy' ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::orderBy('created_at','desc')->paginate(10);
        return view('community.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('community.create');
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
            'email' => 'required|email',
            'body' => 'required'
        ]);

        $posts = new Posts;
        $posts->title = $request->input('title');
        $posts->email = $request->input('email');
        $posts->body = $request->input('body');
        $posts->save();

        return redirect('/community')->with('success','Submitted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Posts::find($id);
        return view('community.reply')->with('post',$post);
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
        $posts = Posts::find($id);
        $posts->approved = true;
        $posts->save();

        return redirect('/community')->with('success','Approved Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Posts::find($id);
        $post->delete();

        return redirect('/community')->with('success','Deleted Successfully');
    }
}
