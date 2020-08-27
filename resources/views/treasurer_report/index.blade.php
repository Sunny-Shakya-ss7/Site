@extends('layouts.app')
@section('title', 'treasurer')
@section('content')
<style>
        .vertical3 { 
            position: absolute;
            width: 9px;
            height:100%;
            min-height: 192%;
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
<div>
    <img class="vertical3 v1" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 6rem;" />
    <img class="vertical3 v2" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 7.5rem;" />
    <img class="vertical3 v3" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 9rem;" />
    <img class="vertical3 v4" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 10.5rem;"/>
    <img class="image" src="{{asset('graphics/logo/a.png')}}" alt="logo" />
</div>
    
<div class="container evtDiv spaDiv">
    <div class="container mt-4 mb-4 text-center"> 
        <hr class="gline"><h1>TREASURER REPORT</h1><hr class="gline">
    </div>
    <div ><a href="treasurer/create" class="btn btn-success float-left">Send Treasurer Report</a></div>
    <br><br>
    <hr>
    @if(count($treasurer)>0)
            @foreach($treasurer as $data)
                <div class="well evtBody">
                    <div class="row evtCont">
                        <div class="col-md-8 col-sm-4 evtInfo">
                            <h3><a style="color: white" href="/treasurer/{{$data->id}}">{{$data->club_name}}</a></h3>
                            <h5>{{$data->month_name}}</h5>
                            <small><i class="far fa-calendar-alt"></i> {{$data->created_at}} by {{$data->club_name}}</small>
                            {!!Form::open(['action' => ['TreasurerController@destroy', $data->id], 'method' => 'POST'])!!}
                                {{Form::hidden('_method', 'DELETE' )}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger '])}}
                            {!!Form::close()!!}
                        </div>
                    </div>
                </div><br>
            @endforeach
			<div class="text-center"> {{$treasurer->links()}}</div>
            

        @else
            <p>No Reports Found</p>
        @endif

    <br><br><br>
    
</div>

@endsection

