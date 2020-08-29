@extends('layouts.app')
@section('title', 'Monthly Report')
@section('content')

<style>
        .vertical3 { 
            position: absolute;
            width: 9px;
            height:100%;
            min-height: 182%;
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
        <hr class="gline"><h1 style="color: gold;">MONTHLY PROGRESSIVE REPORT</h1><hr class="gline">
    </div>
    <div ><a href="report/create" class="btn btn-success float-left">Send Monthely Progressive Report</a></div>
    <br><br>
    <hr>
    @if(count($monthreport)>0)
            @foreach($monthreport as $monthreports)
                <div class="well evtBody">
                    <div class="row evtCont">
                        <div class="col-md-8 col-sm-4 evtInfo">
                            <h3><a style="color: white" href="/report/{{$monthreports->id}}">{{$monthreports->club_name}}</a></h3>
                            <h5>{{$monthreports->month_name}}</h5>
                            <small><i class="far fa-calendar-alt"></i> {{$monthreports->created_at}} by {{$monthreports->club_name}}</small>
                            {!!Form::open(['action' => ['MonthreportController@destroy', $monthreports->id], 'method' => 'POST'])!!}
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
			<div class="text-center"> {{$monthreport->links()}}</div>

    <br><br><br>
    
</div>

@endsection