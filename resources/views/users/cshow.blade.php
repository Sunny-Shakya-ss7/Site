@extends('layouts.app')
@section('title',$Cadmin->name)

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
			Name : {{$Cadmin->name}} <br>
			Email : {{$Cadmin->email}} <br>
			From Club Name : {{$Cadmin->club_name}}<br>
			Club Post : {{$Cadmin->club_name}}<br>
			Created At : {{$Cadmin->club_post}}<br>
			Updated At : {{$Cadmin->updated_at}}
		</div>
		<div class="col-md-8 col-sm-4">
			<img class="ml-4 rounded-circle" src="/storage/profile/{{$Cadmin->profile_image}}" style="height: 75%; width: 50%;">
		</div>
		</div>
	</div>
@endsection