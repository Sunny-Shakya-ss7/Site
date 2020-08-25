@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

</style>
<div>
    <div><a href="report/create" class="btn btn-success float-left">Send Monthely Progressive Report</a></div>
    <hr>
    <br><br><br>
    <div style="overflow-x:auto;">
            <h3>MOnthly progressive reports by You</h3>  
            @if(count($monthreport)> 0)

        <table class="table-bordered" >
                <thead>
                        <!-- <th colspan="6" class="text-center">Users</th> -->
                    <tr>
                        <th>Id</th>
                        <th>LEO CLUB NAME</th>
                        <th>Month Of Report</th>
                        <th>Members from last report</th>
                        <th>New Members</th>
                        <th>Dropped Members</th>
                        <th>Total members</th>
                        <th>Board Meeting</th>
                        <th>% of attendance</th>
                        <th>Regular Meeting</th>
                        <th>% of attendance</th> 
                        <th>Number of Programs and Activities (Conducted)</th>
                        <th>TYPES OF PROJECT COMPLETED</th>
                        <th>Mask Distribution Program Hosted by LDC 325 A2</th>
                        <th>BOD Schooling</th>
                        <th>One week training session</th>
                        <th>District Handover Program</th>
                        <th>Total Number of participants</th>
                        <th>Participation in Fellow Leo Clubs/Regional/Area Meetings & Programs.</th>
                        <th>Hosted Region/Area/District/Multiple/International Programs/Meetings</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach($monthreport as $monthreport)
                    <tr>
                        <td >{{$monthreport->id}}</td>
                        <td>{{$monthreport->club_name}}</td>
                        <td>{{$monthreport->month_name}}</td>
                        <td >{{$monthreport->last_memb}}</td>
                        <td >{{$monthreport->new_memb}}</td>
                        <td >{{$monthreport->drop_memb}}</td>
                        <td >{{$monthreport->total_memb}}</td>
                        <td >{{$monthreport->board_meet}}</td>
                        <td >{{$monthreport->attendance_1}}</td>
                        <td >{{$monthreport->regular_meet}}</td>
                        <td >{{$monthreport->attendance_2}}</td>
                        <td >{{$monthreport->num_prog}}</td>
                        <td >
                            @foreach($monthreport->project as $data)
                            {{$data}},
                            @endforeach
                           </td>
                        <td>{{$monthreport->mask}}</td>
                        <td >{{$monthreport->bod}}</td>
                        <td>{{$monthreport->training}}</td>
                        <td >{{$monthreport->handover}}</td>
                        <td >{{$monthreport->participants}}</td>
                        <td >{{$monthreport->participation_meeting}}</td>
                        <td>{{$monthreport->hosted_meeting}}</td>
                    </tr>
                    @endforeach
                </tbody>

               
        </table>
        </div>
            @endif
    </div>
</div>

@endsection