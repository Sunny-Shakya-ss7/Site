@extends('layouts.app')
@section('title', 'Award and Reconization')
@section('content')
<div class="text-center">
<b><h1>MONTHLY PROGRESSIVE REPORT</h1></b> 
</div>
<div class="text-center">
<b><h4>Leo District Council 325-A2, MD 325, Nepal</h4></b> 
</div>
<div class="container">
    {!! Form::open(['action' => 'MonthreportController@store', 'method' => 'POST']) !!}    
    <div  class="form-group mt-3" style="width:40%">
        <h5> {{Form::label('title', 'Leo Club Name *')}}</h5>
        {{Form::select('club_name', ['Bagmati Leo Club' => 'Bagmati Leo Club', 'Banepa Leo Club' => 'Banepa Leo Club', 'Bhaktapur Araniko Leo Club' => 'Bhaktapur Araniko Leo Club', 'Bhaktapur Dibyaswori Leo Club' => 'Bhaktapur Dibyaswori Leo Club', 'Bhaktapur Golden Gate Leo Club' => 'Bhaktapur Golden Gate Leo Club', 'Bhaktapur Heart & Diabetes Center Leo Club' => 'Bhaktapur Heart & Diabetes Center Leo Club', 'Bhaktapur Kedareshwor Leo Club' => 'Bhaktapur Kedareshwor Leo Club', 'Bhaktapur Rose Village Leo Club' => 'Bhaktapur Rose Village Leo Club', 'Bhaktapur Suryabinayak Leo Club' => 'Bhaktapur Suryabinayak Leo Club', 'Dhanusha Janakpur Leo Club' => 'Dhanusha Janakpur Leo Club', 'Hariwon Leo Club' => 'Hariwon Leo Club', 'Janakpur Monastic Leo Club' => 'Janakpur Monastic Leo Club', 'Kabhre Banepa Leo Club' => 'Kabhre Banepa Leo Club', 'Kabhre Sankhu Leo Club' => 'Kabhre Sankhu Leo Club', 'Kathmandu Eureka Leo Club' => 'Kathmandu Eureka Leo Club', 'Kathmandu Capital Leo Club' => 'Kathmandu Capital Leo Club', 'Kathmandu Synergy Leo Club' => 'Kathmandu Synergy Leo Club', 'Kathmandu Alka Leo Club' => 'Kathmandu Alka Leo Club', 'Kathmandu Central Leo Club' => 'Kathmandu Central Leo Club', 'Kathmandu Chabahil City Leo Club' => 'Kathmandu Chabahil City Leo Club', 'Kathmandu Chabahil Leo Club' => 'Kathmandu Chabahil Leo Club', 'Kathmandu Creation Leo Club' => 'Kathmandu Creation Leo Club', 'Kathmandu Diamond Leo Club' => 'Kathmandu Diamond Leo Club', 'Kathmandu Doab Leo Club' => 'Kathmandu Doab Leo Club', 'Kathmandu Downtown Leo Club' => 'Kathmandu Downtown Leo Club', 'Kathmandu Futurestar Leo Club' => 'Kathmandu Futurestar Leo Club', 'Kathmandu High Vision Leo Club' => 'Kathmandu High Vision Leo Club', 'Kathmandu Himchuli Leo Club' => 'Kathmandu Himchuli Leo Club', 'Kathmandu Horizon Leo Club' => 'Kathmandu Horizon Leo Club', 'Kathmandu Imperial Leo Club' => 'Kathmandu Imperial Leo Club', 'Kathmandu Kageshwori Leo Club' => 'Kathmandu Kageshwori Leo Club', 'Kathmandu Kailash Leo Club' => 'Kathmandu Kailash Leo Club', 'Kathmandu Kirtipur Leo Club' => 'Kathmandu Kirtipur Leo Club', 'Kathmandu Natural Leo Club' => 'Kathmandu Natural Leo Club', 'Kathmandu Peace Leo Club' => 'Kathmandu Peace Leo Club', 'Kathmandu Pioneer Leo Club' => 'Kathmandu Pioneer Leo Club', 'Kathmandu Ramechap Leo Club' => 'Kathmandu Ramechap Leo Club', 'Kathmandu Rays Leo Club' => 'Kathmandu Rays Leo Club', 'Kathmandu Regency Leo Club' => 'Kathmandu Regency Leo Club', 'Kathmandu Roshni Leo Club' => 'Kathmandu Roshni Leo Club', 'Kathmandu Samriddhi Leo Club' => 'Kathmandu Samriddhi Leo Club', 'Kathmandu Samriddhi Mega Chapter Leo Club' => 'Kathmandu Samriddhi Mega Chapter Leo Club', 'Kathmandu Sunrise Arundayo Academy Leo Club' => 'Kathmandu Sunrise Arundayo Academy Leo Club', 'Kathmandu Unique Leo Club' => 'Kathmandu Unique Leo Club', 'Kathmandu Vision Leo Club' => 'Kathmandu Vision Leo Club', 'Lahan City Leo Club' => 'Lahan City Leo Club', 'Lalbandi City Leo Club' => 'Lalbandi City Leo Club', 'Mount 8848 Leo Club ** Kohinoor' => 'Mount 8848 Leo Club ** Kohinoor', 'Nepal Eco Friendly Leo Club' => 'Nepal Eco Friendly Leo Club', 'Nepal Excellence Leo Club' => 'Nepal Excellence Leo Club', 'Okhaldhunga Leo Club' => 'Okhaldhunga Leo Club', 'Panauti Leo Club' => 'Panauti Leo Club', 'Sindhuli City Leo Club' => 'Sindhuli City Leo Club'], null, ['class' => ' form-control input', 'placeholder' => '','required' => 'required'])}}
     </div> 


    <div class="form-group" style="width:40%">
        <h5>{{Form::label('title', 'Month Of Report*')}}</h5> 
        {{Form::select('month_name', ['January'=>'January','February'=>'February','March'=>'March','April'=>'April','May'=>'May','June'=>'June','July'=>'July','August'=>'August','September'=>'September','October'=>'October','November'=>'November','December'=>'December'], null, ['class' => 'form-control input', 'placeholder' => '','required' => 'required'])}}
     </div> 

    <div class="form-group">
        <h5>{{Form::label('title', 'A. MEMBERSHIP REPORT*')}}</h5>
        {{Form::label('title', '1. Members from last report:')}}
        {{Form::number('last_memb','',['class' => ' col-md-3 ml-3 input p-2','required' => 'required'])}} <br>
        {{Form::label('title', '2. New Members ',['class'=>'mr-5'])}}
        {{Form::number('new_memb','',['class' => ' col-md-3 ml-5 input p-2','required' => 'required'])}} <br>
        {{Form::label('title', '3. Dropped Members',['class'=>'mr-5'])}}
        {{Form::number('drop_memb','',['class' => ' col-md-3 ml-3 input p-2','required' => 'required'])}} <br>
        {{Form::label('title', '4. Total Members',['class'=>'mr-5'])}}
        {{Form::number('total_memb','',['class' => ' col-md-3 ml-5 input p-2','required' => 'required'])}} <br>
    </div>
    
    <div class="form-group">
        <h5>{{Form::label('title','B. MEETING REPORT*')}}</h5> 
        {{Form::label('title','1. Board Meeting',['class'=>'mr-3'])}}
        {{Form::number('board_meet','',['class' => ' col-md-3 ml-4 input p-2','required' => 'required'])}} <br>
        {{Form::label('title','2. % of attendance')}}
        {{Form::number('attendance_1','',['class' => ' col-md-3 ml-3 input p-2','required' => 'required'])}} <br>
        {{Form::label('title','3. Regular Meeting')}}
        {{Form::number('regular_meet','',['class' => ' col-md-3 ml-3 input p-2','required' => 'required' ])}} <br>
        {{Form::label('title','4. % of attendance')}}
        {{Form::number('attendance_2','',['class' => ' col-md-3 ml-3 input p-2','required' => 'required'])}} <br>

    </div>

    <div class="form-group">
        <h5>{{Form::label('title', 'Number of Programs and Activities (Conducted)*')}}</h5> 
        {{Form::number('num_prog','',['class' => 'form-control col-md-1 input','required' => 'required'])}}

     </div> 

    <div class="form-group">
        <h5> {{Form::label('title', 'Types of project completed*')}}</h5>
        {{Form::checkbox('project[]', 'fundraiser',true)}}
        {{Form::label('title', 'Fundraiser',['class' => ' ml-3 '])}}<br> 
        {{Form::checkbox('project[]', 'service')}}
        {{Form::label('title', 'Service',['class' => ' ml-3 '])}}<br> 
        {{Form::checkbox('project[]', 'online')}}
        {{Form::label('title', 'Online',['class' => ' ml-3 '])}}<br>
        {{Form::checkbox('project[]', 'challange')}} 
        {{Form::label('title', 'Challange',['class' => ' ml-3 '])}} <br>
        {{Form::checkbox('project[]', 'joint')}} 
        {{Form::label('title', 'Joint Program (With Other Organization )',['class' => ' ml-3 '])}} <br>
        {{Form::checkbox('project[]', 'Fellowship')}}
        {{Form::label('title', 'fellowship',['class' => ' ml-3 '])}} <br>
        {{Form::checkbox('project[]', 'official')}}
        {{Form::label('title', 'Official Leo Programes',['class' => ' ml-3 '])}} <br>
        {{Form::checkbox('project[]', 'Cultural')}}
        {{Form::label('title', 'cultural',['class' => ' ml-3 '])}} <br>
        {{Form::checkbox('project[]', 'Training')}}
        {{Form::label('title', 'training',['class' => ' ml-3 '])}} <br>
        {{Form::checkbox('project[]', 'Social Welfare')}}
        {{Form::label('title', 'social',['class' => ' ml-3 '])}} <br>
    </div>

    <div class="form-group ">
        <h5>{{Form::label('title', 'Number of Participants in District Program *')}}</h5> 
        {{Form::label('title', 'Mask Distribution Program')}} <br>
        {{Form::label('title', ' Hosted by LDC 325 A2:',['class'=>'mr-3'])}}
        {{Form::number('mask','',['class' => ' col-md-3 ml-3 input p-2','required' => 'required'])}} <br>
        {{Form::label('title', 'BOD Schooling',['class'=>'mr-5'])}}
        {{Form::number('bod','',['class' => ' col-md-3 ml-5 input p-2','required' => 'required'])}} <br>
        {{Form::label('title', 'One week training session')}}
        {{Form::number('training','',['class' => ' col-md-3 ml-3 input p-2','required' => 'required'])}} <br>
        {{Form::label('title', 'District Handover Program',['class'=>'mr-1'])}}
        {{Form::number('handover','',['class' => ' col-md-3 ml-3 input p-2','required' => 'required'])}} <br>
        {{Form::label('title', 'Total Number of participants')}}
        {{Form::number('participants','',['class' => ' col-md-3 ml-1 input p-2','required' => 'required'])}} <br>
    </div>

    <div class="form-group">
        <h5>{{Form::label('title', 'Participation in Fellow Leo Clubs/Regional/Area Meetings & Programs. *')}}</h5> 
        {{ Form::textarea('participation_meeting','',['class' => '  input','required' => 'required'])}} <br>
        {{Form::label('title','Participated Programs Only***')}} 

    </div>

    <div class="form-group">
        <h5>{{Form::label('title', 'Hosted Region/Area/District/Multiple/International Programs/Meetings *')}}</h5>
        {{ Form::textarea('hosted_meeting','',['class' => ' p-3 input','required' => 'required'])}} <br>
        {{Form::label('title','Hosted Programs Only***')}} 

    </div>    

    {{Form::submit('Submit Form', ['class' => 'p-3 btn btn-primary', 'style'=> 'margin-left:16%;'])}}
    {!! Form::close() !!}
</div>
@endsection

