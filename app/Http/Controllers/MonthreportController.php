<?php

namespace App\Http\Controllers;

use App\Monthreport;
use Illuminate\Http\Request;
use Auth;

class MonthreportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monthreports = monthreport::orderBy('id','desc')->paginate(5);
        return view('monthly_report.index')
                    ->with('monthreport', $monthreports);

     if(Auth::guard('admins')->check()){
        $monthreports = monthreport::orderBy('id','desc')->paginate(5);
        return view('monthly_report.index')
                    ->with('monthreport', $monthreports);
    }
    if(Auth::guard('cadmin')->check()){
        $user_id = Auth::guard('cadmin')->user()->id;
        $cadmin = Cadmin::find($user_id);
        return view('monthly_report.index')
                    ->with('monthreport', $cadmin->monthreports);
    }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        return view('monthly_report/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $monthreports=new Monthreport([
            'club_name'=>$request->club_name,
            'month_name'=>$request->month_name,
            'last_memb'=>$request->last_memb,
            'new_memb'=>$request->new_memb,
            'drop_memb'=>$request->drop_memb,
            'total_memb'=>$request->total_memb,
            'board_meet'=>$request->board_meet,
            'attendance_1'=>$request->attendance_1,
            'regular_meet'=>$request->regular_meet,
            'attendance_2'=>$request->attendance_2,
            'num_prog'=>$request->num_prog,
            'project'=>$request->project,
            'mask'=>$request->mask,
            'bod'=>$request->bod,
            'training'=>$request->training,
            'handover'=>$request->handover,
            'participants'=>$request->participants,
            'participation_meeting'=>$request->participation_meeting,
            'hosted_meeting'=>$request->hosted_meeting,
        ]);
         if( Auth::guard('cadmin')->check())
        $monthreports->cadmin_id = Auth::guard('cadmin')->user()->id;
        else
        $monthreports->cadmin_id = Auth::guard('admins')->user()->id;
        $monthreports->save();
        return redirect('/report')->with('success','Report has been Updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Monthreport  $monthreport
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $monthreport= Monthreport::find($id);
        return view('monthly_report.show')->with('monthreport',$monthreport);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Monthreport  $monthreport
     * @return \Illuminate\Http\Response
     */
    public function edit(Monthreport $monthreport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Monthreport  $monthreport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monthreport $monthreport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Monthreport  $monthreport
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $monthreport = Monthreport::find($id);
        //Check for correct user
        $monthreport->delete();
        return redirect('/report')->with('success', 'Report has been Removed');

    }
}
