@extends('layouts.app')
@section('title', 'Profile')
@section('content')

<div class="container evtDiv spaDiv">
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