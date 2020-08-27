@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<style>
table {
  align:center;
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th{
  text-align: left;
  padding: 8px;
}
td{
  text-align: center;
  padding: 8px;
}

</style>
<div class="container">
    <div><a href="/report" class="btn btn-success float-left">Go Back</a></div>
  
    <br><br><br>
    <div style="overflow-x:auto;">
            <h3 class="text-center">Report of {{$monthreport->month_name}}</h3>  <br>
           

        <table class="table-bordered" >
                <thead>
                    <tr>
                        <th>LEO CLUB NAME</th>
                        <td>{{$monthreport->club_name}}</td>
                        
                    <tr>
                        <th>Month Of Report</th>
                        <td>{{$monthreport->month_name}}</td>
                    <tr>                   
                        <th>Members from last report</th>
                        <td >{{$monthreport->last_memb}}</td>
                    <tr>
                        <th>New Members</th>
                        <td >{{$monthreport->new_memb}}</td>
                    <tr>
                        <th>Dropped Members</th>
                        <td >{{$monthreport->drop_memb}}</td>
                    <tr>
                        <th>Total members</th>
                        <td >{{$monthreport->total_memb}}</td>
                    <tr>            
                        <th>Board Meeting</th>
                        <td >{{$monthreport->board_meet}}</td>
                        
                    <tr> 
                        <th>% of attendance</th>
                        <td >{{$monthreport->attendance_1}}</td>
                    <tr> 
                        <th>Regular Meeting</th>
                        <td >{{$monthreport->regular_meet}}</td>
                    <tr> 
                        <th>% of attendance</th> 
                        <td >{{$monthreport->attendance_2}}</td>
                    <tr> 
                        <th>Number of Programs and Activities (Conducted)</th>
                        <td >{{$monthreport->num_prog}}</td>
                    <tr>     
                        <th>TYPES OF PROJECT COMPLETED</th>
                            <td >
                            @foreach($monthreport->project as $data)
                            {{$data}},
                            @endforeach
                           </td>
                    <tr> 
                        <th>Mask Distribution Program Hosted by LDC 325 A2</th>
                        <td>{{$monthreport->mask}}</td>
                    <tr> 
                        <th>BOD Schooling</th>
                        <td >{{$monthreport->bod}}</td>
                    <tr> 
                        <th>One week training session</th>
                        <td>{{$monthreport->training}}</td>
                    <tr> 
                        <th>District Handover Program</th>
                        <td >{{$monthreport->handover}}</td>
                    <tr>  
                        <th>Total Number of participants</th>
                        <td >{{$monthreport->participants}}</td>
                    <tr> 
                        <th>Participation in Fellow Leo Clubs/Regional/Area Meetings & Programs.</th>
                        <td >{{$monthreport->participation_meeting}}</td>
                    <tr> 
                        <th>Hosted Region/Area/District/Multiple/International Programs/Meetings</th>
                        <td>{{$monthreport->hosted_meeting}}</td>
                    

                </thead>
                <tbody>
                  
                </tbody>
     
        </table>
        </div>
         
    </div>
</div>


@endsection