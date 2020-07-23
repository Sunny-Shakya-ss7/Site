@extends('layouts.app')

@section('content')
    <h1 class="container col-lg-6 col-md-1">Successful Leo Club Projects Activity</h1>
    {!! Form::open(['action' => 'SpaController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <div class=" container form-group col-lg-6 col-md-6">
            {{Form::label('title', 'Leo Club Official Email Address')}}
            {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'example@example.com'])}}        
        </div>
        <div class=" container form-group col-lg-6 col-md-6">
            {{Form::label('title', 'Leo Club Name *')}}
            {{Form::select('club_name', ['Bagmati Leo Club' => 'Bagmati Leo Club', 'Banepa Leo Club' => 'Banepa Leo Club', 'Bhaktapur Araniko Leo Club' => 'Bhaktapur Araniko Leo Club', 'Bhaktapur Dibyaswori Leo Club' => 'Bhaktapur Dibyaswori Leo Club', 'Bhaktapur Golden Gate Leo Club' => 'Bhaktapur Golden Gate Leo Club', 'Bhaktapur Heart & Diabetes Center Leo Club' => 'Bhaktapur Heart & Diabetes Center Leo Club', 'Bhaktapur Kedareshwor Leo Club' => 'Bhaktapur Kedareshwor Leo Club', 'Bhaktapur Rose Village Leo Club' => 'Bhaktapur Rose Village Leo Club', 'Bhaktapur Suryabinayak Leo Club' => 'Bhaktapur Suryabinayak Leo Club', 'Dhanusha Janakpur Leo Club' => 'Dhanusha Janakpur Leo Club', 'Hariwon Leo Club' => 'Hariwon Leo Club', 'Janakpur Monastic Leo Club' => 'Janakpur Monastic Leo Club', 'Kabhre Banepa Leo Club' => 'Kabhre Banepa Leo Club', 'Kabhre Sankhu Leo Club' => 'Kabhre Sankhu Leo Club', 'Kathmandu Eureka Leo Club' => 'Kathmandu Eureka Leo Club', 'Kathmandu Capital Leo Club' => 'Kathmandu Capital Leo Club', 'Kathmandu Synergy Leo Club' => 'Kathmandu Synergy Leo Club', 'Kathmandu Alka Leo Club' => 'Kathmandu Alka Leo Club', 'Kathmandu Central Leo Club' => 'Kathmandu Central Leo Club', 'Kathmandu Chabahil City Leo Club' => 'Kathmandu Chabahil City Leo Club', 'Kathmandu Chabahil Leo Club' => 'Kathmandu Chabahil Leo Club', 'Kathmandu Creation Leo Club' => 'Kathmandu Creation Leo Club', 'Kathmandu Diamond Leo Club' => 'Kathmandu Diamond Leo Club', 'Kathmandu Doab Leo Club' => 'Kathmandu Doab Leo Club', 'Kathmandu Downtown Leo Club' => 'Kathmandu Downtown Leo Club', 'Kathmandu Futurestar Leo Club' => 'Kathmandu Futurestar Leo Club', 'Kathmandu High Vision Leo Club' => 'Kathmandu High Vision Leo Club', 'Kathmandu Himchuli Leo Club' => 'Kathmandu Himchuli Leo Club', 'Kathmandu Horizon Leo Club' => 'Kathmandu Horizon Leo Club', 'Kathmandu Imperial Leo Club' => 'Kathmandu Imperial Leo Club', 'Kathmandu Kageshwori Leo Club' => 'Kathmandu Kageshwori Leo Club', 'Kathmandu Kailash Leo Club' => 'Kathmandu Kailash Leo Club', 'Kathmandu Kirtipur Leo Club' => 'Kathmandu Kirtipur Leo Club', 'Kathmandu Natural Leo Club' => 'Kathmandu Natural Leo Club', 'Kathmandu Peace Leo Club' => 'Kathmandu Peace Leo Club', 'Kathmandu Pioneer Leo Club' => 'Kathmandu Pioneer Leo Club', 'Kathmandu Ramechap Leo Club' => 'Kathmandu Ramechap Leo Club', 'Kathmandu Rays Leo Club' => 'Kathmandu Rays Leo Club', 'Kathmandu Regency Leo Club' => 'Kathmandu Regency Leo Club', 'Kathmandu Roshni Leo Club' => 'Kathmandu Roshni Leo Club', 'Kathmandu Samriddhi Leo Club' => 'Kathmandu Samriddhi Leo Club', 'Kathmandu Samriddhi Mega Chapter Leo Club' => 'Kathmandu Samriddhi Mega Chapter Leo Club', 'Kathmandu Sunrise Arundayo Academy Leo Club' => 'Kathmandu Sunrise Arundayo Academy Leo Club', 'Kathmandu Unique Leo Club' => 'Kathmandu Unique Leo Club', 'Kathmandu Vision Leo Club' => 'Kathmandu Vision Leo Club', 'Lahan City Leo Club' => 'Lahan City Leo Club', 'Lalbandi City Leo Club' => 'Lalbandi City Leo Club', 'Mount 8848 Leo Club ** Kohinoor' => 'Mount 8848 Leo Club ** Kohinoor', 'Nepal Eco Friendly Leo Club' => 'Nepal Eco Friendly Leo Club', 'Nepal Excellence Leo Club' => 'Nepal Excellence Leo Club', 'Okhaldhunga Leo Club' => 'Okhaldhunga Leo Club', 'Panauti Leo Club' => 'Panauti Leo Club', 'Sindhuli City Leo Club' => 'Sindhuli City Leo Club'], null, ['class' => 'form-control', 'placeholder' => '','required' => 'required'])}}
        </div>
        <div class=" container form-group col-lg-6 col-md-6">
            {{Form::label('title', 'Activity Name')}}
            {{Form::text('activity_name', '', ['class' => 'form-control'])}}
        </div>
        <div class=" container form-group col-lg-6 col-md-6">
            {{Form::label('title', 'Activity Level *')}}
            {{Form::select('activity_level', ['Club' => 'Club', 'Region' => 'Region', 'Area' => 'Area', 'District' => 'District', 'Multiple District' => 'Multiple District', 'International' => 'International'], null, ['class' => 'form-control', 'placeholder' => '','required' => 'required'])}}
        </div>
        <hr><h3 class="container col-lg-6 col-md-6 col-sm-10">Heading</h3><hr>
        <div class=" container form-group col-lg-6 col-md-6">
            {{Form::label('Active Duration', 'Active Duration *')}}
            <div class="form-check">
                {{Form::radio('active_duration', 'single', ['class' => 'form-check-input','required' => 'required'])}} Single Day
            </div>
            <div class="form-check">
                {{Form::radio('active_duration', 'multiple')}} Multiple Day 
            </div>
        </div>
        <div class=" container form-group col-lg-6 col-md-6">
            {{Form::label('title', 'Date *')}}
            {{Form::date('start_date', '', ['class' => 'form-control','required' => 'required'])}}
        </div>
        <div class=" container form-group col-lg-6 col-md-6">
            {{Form::label('title', 'Time *')}}
            {{Form::time('time', null, ['class' => 'form-control','required' => 'required']) }}
        </div>
        <!-- \Carbon\Carbon::now() -> To initialize today's date -->
        <div class=" container form-group col-lg-6 col-md-6">
            {{Form::label('title', 'End Date (Only if Multiple Day)')}}
            {{Form::date('end_date', '', ['class' => 'form-control'])}}
        </div>
        <div class=" container form-group col-lg-6 col-md-6">
            {{Form::label('title', 'Signature Activity ? (If yes it would be displayed in the Leo District Blog)')}}<br>
            {{Form::checkbox('yes', '1', true)}} Yes
        </div>
        <div class=" container form-group col-lg-6 col-md-6">
            {{Form::label('title', 'Project Type *')}}
            {{Form::select('project_type', [ 'Fundraiser' => 'Fundraiser', 'Service' => 'Service', 'Online' => 'Online', 'Challenge' => 'Challenge', 'Joint Program (With Other Organization)' => 'Joint Program (With Other Organization)', 'Fellowship' => 'Fellowship', 'Official Leo Program' => 'Official Leo Program', 'Cultural' => 'Cultural', 'Training' => 'Training', 'Social Welfare' => 'Social Welfare'], null, ['class' => 'form-control', 'placeholder' => '','required' => 'required'])}}
        </div>
        <div class=" container form-group col-lg-6 col-md-6">
            {{Form::label('body', 'Activity Details *')}}
            {{Form::textarea('', '', ['id' => 'summary_ckeditor', 'name' => 'summary_ckeditor', 'class' => 'form-control', 'placeholder' => '','required' => 'required'])}}
        </div>
        <div class=" container form-group col-lg-6 col-md-6">
            {{Form::label('title', 'Leos Involved *')}}
            {{Form::number('leos_involved', '',['class' => 'form-control', 'placeholder' => 'ex: 23','required' => 'required'])}}
        </div>
        <div class=" container form-group col-lg-6 col-md-6">
            {{Form::label('title', 'People Benefited *')}}
            {{Form::number('people_benefited', '',['class' => 'form-control', 'placeholder' => 'ex: 23','required' => 'required'])}}
        </div>
        <div class=" container form-group col-lg-6 col-md-6">
            {{Form::label('title', 'Overall Points Received')}}
            {!!Form::number('points','5',['class'=>'form-control','placeholder'=>'','readonly'=>'$is_read'])!!}
        </div>
        <div class=" container form-group col-lg-6 col-md-6">
            {{Form::label('title', 'Total Leo Hours *')}}
            {{Form::number('hours', '',['class' => 'form-control', 'placeholder' => 'ex: 23','required' => 'required'])}}
        </div>
        <div class=" container form-group col-lg-6 col-md-6">
            {{Form::label('title', 'Upload Project Photos *')}}
            {{Form::file('image')}}
        </div>
        <div class=" container form-group col-lg-6 col-md-6">
            {{Form::submit('Next',['class' => 'btn btn-outline-primary'])}}
        </div>

    {!! Form::close() !!}
@endsection