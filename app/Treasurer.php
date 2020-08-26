<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treasurer extends Model
{

    protected $fillable=[
        'id','club_name','month_name','admin_expenses','admin_amount1','admin_income','admin_amount2','serv_expenses','serv_amount1','serv_income','serv_amount2','tot_fund','tot_cash','tr_prefix','tr_fname','tr_lname','tr_cont_num','jtr_prefix','jtr_fname','jtr_lname','jtr_cont_num','jtr_prefix_1','jtr_fname_1','jtr_lname_1','admin_amount1_total','admin_amount2_total','serv_amount1_total','serv_amount2_total'
    ];

    protected $casts = [
        'admin_expenses'=>'array',
        'admin_amount1'=>'array',
        'admin_income'=>'array',
        'admin_amount2'=>'array',
        'serv_expenses'=>'array',
        'serv_amount1'=>'array',
        'serv_income'=>'array',
        'serv_amount2'=>'array'
    ];
    

}
