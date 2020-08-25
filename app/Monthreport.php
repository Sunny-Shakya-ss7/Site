<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monthreport extends Model
{
    protected $fillable=[
        'id','club_name','month_name','last_memb','new_memb',
        'drop_memb','total_memb','board_meet','attendance_1',
        'regular_meet','attendance_2','num_prog','project','mask','bod',
        'training','handover','participants','participation_meeting',
        'hosted_meeting'
    ];

    protected $casts = [
        'project'=>'array'
    ];
}
