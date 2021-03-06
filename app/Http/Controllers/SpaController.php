<?php

namespace App\Http\Controllers;

use  Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\spa;
use App\Cadmin;
use Auth;
use PDF;

class SpaController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth:cadmin,admins');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::guard('admins')->check()){
            $spas = spa::all();
            return view('spa.index')
                        ->with('spas', $spas);
        }
        if(Auth::guard('cadmin')->check()){
            $user_id = Auth::guard('cadmin')->user()->id;
            $cadmin = Cadmin::find($user_id);
            return view('spa.index')
                        ->with('spas', $cadmin->spas);
        }
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

                $data[] = $fileNameToStore;
            }
        }else{
            $fileNameToStore = 'noimage.jpg';  
        }

        // Points Calc Logic
           $point = substr($request->active_duration, 0, 2);
           $point1 = trim($point);
           $active_duration = substr($request->active_duration, 3);

           $point = substr($request->activity_level, 0, 2);
           $point2 = trim($point);
           $activity_level = substr($request->activity_level, 3);

        $spa = new spa;
        $spa->Leo_Club_Official_Email_Address = $request->input('email');
        $spa->Leo_Club_Name = $request->input('club_name');
        $spa->Activity_Name = $request->input('activity_name');
        $spa->Activity_Level = $activity_level;
        $spa->Active_Duration = $active_duration;
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
        $spa->Photos = json_encode($data);
        if( Auth::guard('cadmin')->check())
        $spa->cadmin_id = Auth::guard('cadmin')->user()->id;
        else
        $spa->cadmin_id = Auth::guard('admins')->user()->id;
        $spa->save();

         if(Auth::guard('cadmin')->check()){
            $user_id = Auth::guard('cadmin')->user()->id;
            $cadmin = Cadmin::find($user_id);
            $cadmin->points = $cadmin->points + $point1 + $point2;
            $cadmin->save();
        }

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
        $spa = spa::find($id);
        return view('spa.show')->with('spa',$spa);
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
        $pic = spa::find($id);
        if($pic->Photos != 'noimage.jpg')
                    Storage::delete('storage/images/'.$pic->Photos);
        $pic->delete();
        return redirect('/spa')->with('success', 'Report has been Removed'); 
    }

public function downloadPDF($id)
{
     $spa = spa::find($id);
    $pdf = PDF::loadView('spa.pdf', compact('spa'));
        
    return $pdf->download('Report_SPA.pdf');
}

}