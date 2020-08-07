<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\spa;
use App\Cadmin;
use Auth;

class SpaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admins,cadmin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user_id = Auth::guard('cadmin')->user()->id;
        $cadmin = Cadmin::find($user_id);
        return view('spa.index')
                    ->with('spas', $cadmin->spas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|nullable',
            'club_name' => 'required',
            'activity_name' => 'string|nullable',
            'activity_level' => 'required',
            'active_duration' => 'required',
            'start_date' => 'date|required',
            'time' => 'required',
            'end_date' => 'nullable|date',
            'project_type' => 'required',
            'summary_ckeditor' => 'required',
            'leos_involved' => 'required|numeric',
            'people_benefited' => 'required|numeric',
            'points' => 'required|numeric',
            'hours' => 'required|numeric',
            'image' => 'image|nullable|max:1999'
        ]);

        if ($request->hasfile('file')) {
            foreach ($request->file as $file) {
                $fileNameWithExt = $file->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                // Get just extension
                $extension = $file->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $file->storeAs('public/images', $fileNameToStore);

                $data = $fileNameToStore;
            }
        }else{
            $fileNameToStore = 'noimage.jpg';  
        }

        $spa = new spa;
        $spa->Leo_Club_Official_Email_Address = $request->input('email');
        $spa->Leo_Club_Name = $request->input('club_name');
        $spa->Activity_Name = $request->input('activity_name');
        $spa->Activity_Level = $request->input('activity_level');
        $spa->Active_Duration = $request->input('active_duration');
        $spa->Start_Date = $request->input('start_date');
        $spa->Time = $request->input('time');
        $spa->End_Date = $request->input('end_date');
        $spa->Signature_Activity = ($request->has('yes')) ? true : false;
        $spa->Project_Type = $request->input('project_type');
        $spa->Activity_Details = $request->input('summary_ckeditor');
        $spa->Leos_Involved = $request->input('leos_involved');
        $spa->People_Benefited = $request->input('people_benefited');
        $spa->Overall_Points_Received = $request->input('points');
        $spa->Total_Leo_Hours = $request->input('hours');  
        $spa->Photos = $data;
        if( Auth::guard('cadmin')->check())
        $spa->cadmin_id = Auth::guard('cadmin')->user()->id;
        else
        $spa->cadmin_id = Auth::guard('admins')->user()->id;
       
        $spa->save();

        return redirect('/spa')->with('success', 'SPA Submitted');
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
        //
    }
}
