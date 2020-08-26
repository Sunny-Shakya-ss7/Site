@extends('layouts.app')
@section('title', 'treasurer')
@section('content')

<div class="container evtDiv spaDiv">
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

