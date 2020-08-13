@extends('layouts.app')
@section('title','View Reports')
@section('content')

    <style>
        .vertical3 { 
            position: absolute;
            width: 9px;
            min-height: 350%;
        }

        @media (max-width: 500px) {
            .vertical3 {
                width: 5px;
                min-height: 364%;
            }
        }

        @media (max-width: 1080px) {
        .v1 {
            left: 3rem !important;
        }
        .v2 {
            left: 4rem !important;
        }
        .v3 {
            left: 5rem !important;
        }
        .v4 {
            left: 6rem !important;
        }
        }

        @media (max-width: 700px) {
        .v1 {
            left: 2rem !important;
        }
        .v2 {
            left: 3rem !important;
        }
        .v3 {
            left: 4rem !important;
        }
        .v4 {
            left: 5rem !important;
        }
        }
    </style>

    <img class="vertical3 v1" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 6rem;" />
    <img class="vertical3 v2" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 7.5rem;" />
    <img class="vertical3 v3" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 9rem;" />
    <img class="vertical3 v4" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 10.5rem;"/>
    <img class="image" src="{{asset('graphics/logo/a.png')}}" alt="logo" />
 @if(Auth::guard('admins')->check())
    <h1 style="color: #FBFF3C;" class="space2">All Successful Leo Club Projects Activity Reports </h1>
@else
    <h1 style="color: #FBFF3C;" class="space2">Your Successful Leo Club Projects Activity Reports </h1>
@endif
        <div class="container evtDiv spaDiv">
            <a href="/spa/create" class="btn btn-success ">Send SPA Report</a>
            <hr>
        @if(count($spas)>0)
            @foreach($spas as $spa)
                <div class="well evtBody">
                    <div class="row evtCont">
                        <div class="col-md-4 col-sm-4 evtImg">
                            <img id="evtPic" src="/storage/images/{{$spa->Photos}}" alt="pic" style="height:100%; width: 100%;">
                        </div>
                        <div class="col-md-8 col-sm-4 evtInfo">
                        <h3>{{$spa->Activity_Name}} <br> {{$spa->Leo_Club_Name}}</h3>
                         {!!Form::open(['action' => ['SpaController@destroy', $spa->id], 'method' => 'POST'])!!}
                        {{Form::hidden('_method', 'DELETE' )}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger '])}}
                        {!!Form::close()!!}
                        </div>
                    </div>
                </div><br>
            @endforeach
        @else
            <p>No Reports Found</p>
        @endif
    </div>

@endsection