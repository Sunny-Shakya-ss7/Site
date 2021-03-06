@extends('layouts.app')
@section('title',$Cadmin->club_name)

@section('content')
	<div class="container" style="color:white;">
		<div class="well" >
			<br>
			<h1 class="text-center">{{$Cadmin->name}}</h1>
		</div> 
			<a href="/userall" class="btn btn-success">Go Back</a>
			<div class="row">
			<div class="col-md-4 col-sm-4 text-white">
			ID : {{$Cadmin->id}} <br>
			Name : {{$Cadmin->username}} <br>
			Club Name : {{$Cadmin->club_name}}<br>
			Updated At : {{$Cadmin->updated_at}}<br><br>
			Points Gained : {{$Cadmin->points}}
		{!! Form::open(['action' =>['AdminController@points', $Cadmin->id], 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}<br>
		<div class="form-group">
				{{Form::text('points','',['class' => 'form-control col-md-3', 'placeholder' => 'Points Gained'])}}
			</div>
			@error('points')
				<div class="alert alert-danger">
					{{$message}}
				</div>
        	@enderror
        	{{Form::hidden('_method','PUT')}}
			{{Form::submit('Add Points', ['class' => 'btn btn-danger'])}}
		{!! Form::close() !!}
	</div>
		<div class="col-md-8 col-sm-4">
			<img class="ml-4 rounded-circle" src="/storage/profile/{{$Cadmin->profile_image}}" style="height: 75%; width: 50%;">
		</div>
		</div>
</div>
@endsection