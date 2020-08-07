<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Community\Posts;
use Auth;

class ReplyController extends Controller
{
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[
            'reply' => 'required'
        ]);

        $reply = Posts::find($id);
        if(Auth::guard('cadmin')->check())
            $reply->reply_by = Auth::guard('cadmin')->user()->name;
        elseif(Auth::guard('admins')->check())
            $reply->reply_by = Auth::guard('admins')->user()->name;
        else
            $reply->reply_by = Auth::guard('web')->user()->name;
        $reply->reply = $request->input('reply');
        $reply->save();

        return redirect('/community/'.$id)->with('success','Reply Posted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
