<?php

namespace App\Http\Controllers;

use App\Treasurer;
use Illuminate\Http\Request;

class TreasurerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treasurers = Treasurer::orderBy('id','desc')->paginate(5);
        return view('treasurer_report.index')->with('treasurer',$treasurers);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('treasurer_report.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $treasurer=new Treasurer([
            'club_name'=>$request->club_name,
            'month_name'=>$request->month_name,

            'admin_expenses'=>$request->admin_expenses,
            'admin_amount1'=>$request->admin_amount1,
            'admin_income'=>$request->admin_income,
            'admin_amount2'=>$request->admin_amount2
            ,
            'serv_expenses'=>$request->serv_expenses,
            'serv_amount1'=>$request->serv_amount1,
            'serv_income'=>$request->serv_income,
            'serv_amount2'=>$request->serv_amount2,

            'tot_cash'=>$request->tot_cash,
            'tot_fund'=>$request->tot_fund,


            'tr_prefix'=>$request->tr_prefix,
            'tr_fname'=>$request->tr_fname,
            'tr_lname'=>$request->tr_lname,
            'tr_cont_num'=>$request->tr_cont_num,
            
            'jtr_prefix'=>$request->jtr_prefix,
            'jtr_fname'=>$request->jtr_fname,
            'jtr_lname'=>$request->jtr_lname,
            'jtr_cont_num'=>$request->jtr_cont_num,

            'jtr_prefix_1'=>$request->jtr_prefix_1,
            'jtr_fname_1'=>$request->jtr_fname_1,
            'jtr_lname_1'=>$request->jtr_lname_1,
            'admin_amount1_total'=>$request->admin_amount1_total,
            'admin_amount2_total'=>$request->admin_amount2_total,
            'serv_amount1_total'=>$request->serv_amount1_total,
            'serv_amount2_total'=>$request->serv_amount2_total,




        ]);
        $treasurer->save();
        
        $treasurer=Treasurer::all();
        return redirect('/treasurer')->with('success','Report has been Updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Treasurer  $treasurer
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $treasurer= Treasurer::find($id);
        return view('treasurer_report.show')->with('treasurer',$treasurer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Treasurer  $treasurer
     * @return \Illuminate\Http\Response
     */
    public function edit(Treasurer $treasurer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Treasurer  $treasurer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Treasurer $treasurer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Treasurer  $treasurer
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $treasurer = Treasurer::find($id);
        //Check for correct user
        $treasurer->delete();
        return redirect('/treasurer')->with('success', 'Report has been Removed');
        
    }
}
