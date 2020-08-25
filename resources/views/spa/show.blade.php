@extends('layouts.app')
 @section('title','SPA')
@section('content')
		<div class="container">
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Email</th>
        <td>{{$spa->Leo_Club_Official_Email_Address}}</td>
      </tr>
      </thead>
      <tbody>
        <tr>
        <th>Club Name</th>
        <td>{{$spa->Leo_Club_Name}}</td>
        </tr>
      </tbody>
        <thead>
        <tr>
        <th>Activity Name</th>
        <td>{{$spa->Activity_Name}}</td>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th>Activity Level</th>
        <td>{{$spa->Activity_Level}}</td>
        </tr>
        </tbody>
        <thead>
        <tr>
        <th>Active Duration</th>
        <td>{{$spa->Active_Duration}}</td>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th>Start Date</th>
        <td>{{$spa->Start_Date}}</td>
        </tr>
        </tbody>
        <thead>
        <tr>
        <th>Time</th>
        <td>{{$spa->Time}}</td>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th>End Date</th>
        <td>{{$spa->End_Date}}</td>
        </tr>
        </tbody>
        <thead>
        <tr>
        <th>Signature Activity</th>
        <td>{{$spa->Signature_Activity}}</td>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th>Project Type</th>
        <td>{{$spa->Project_Type}}</td>
        </tr>
        </tbody>
        <thead>
        <tr>
        <th>Activity Details</th>
        <td> <?=strip_tags($spa->Activity_Details);?></td>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th>Leos Involved</th>
        <td>{{$spa->Leos_Involved}}</td>
        </tr>
        </tbody>
        <thead>
        <tr>
        <th>People Benefited</th>
        <td>{{$spa->People_Benefited}}</td>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th>Overall Points Received</th>
        <td>{{$spa->Overall_Points_Received}}</td>
        </tr>
        </tbody>
        <thead>
        <tr>
        <th>Total Leo Hours</th>
        <td>{{$spa->Total_Leo_Hours}}</td>
        </tr>
        </thead>
        <a href="{{action('SpaController@downloadPDF', $spa->id)}}" class="btn btn-success">Download PDF</a>
      </table>
        </div>
        <div class="row ml-4">
         <?php 
           $images = json_decode($spa->Photos, true);
         ?>
         @foreach( $images as $img )
          <div class="col-md-3 col-sm-6 col-xs-12 rounded">
            <img src="/storage/images/{{$img}}" alt="No Image" style="height: 50%;" class="rounded">
          </div> 
          @endforeach
      </div>
@endsection

        
        
       
        
       
        
       
       
       
       
       
      
        
    
        
