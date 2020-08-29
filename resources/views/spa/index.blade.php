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

        <div class="container evtDiv" style="margin-left: 15%;">
            <div class="container mt-4 mb-4 text-center">
            @if(Auth::guard('admins')->check())
        <hr class="gline"><h1 style="color: gold;">ALL SPA REPORT</h1><hr class="gline">
        @else
        <hr class="gline"><h1 style="color: gold;">YOUR SPA REPORT</h1><hr class="gline">

        @endif
    </div>
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
                        <h5> <a href="/spa/{{$spa->id}}"> {{$spa->Activity_Name}} </a></h5>
                           <h6> <br> {{$spa->Leo_Club_Name}}<br>{{$spa->created_at}}</h6>
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