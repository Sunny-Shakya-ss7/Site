@extends('layouts.app')
@section('title',$User->name)

@section('content')
	<div class="container" style="color:white;">
		<div class="well" >
			<br>
			<h1 class="text-center">{{$User->name}}</h1>
		</div> 
		@if(Auth::guard('admins')->check())
			<a href="/userall" class="btn btn-success">Go Back</a>
		@else
			<a href="/user" class="btn btn-success">Go Back</a>
		@endif
			<div class="row">
			<div class="col-md-4 col-sm-4 text-white">
			ID : {{$User->id}} <br>
			Name : {{$User->name}} <br>
			Email : {{$User->email}} <br>
			From Club Name : {{$User->club_name}}<br>
			Club Post : {{$User->club_name}}<br>
			Created At : {{$User->club_post}}<br>
			Updated At : {{$User->updated_at}}
		</div>
		<div class="col-md-8 col-sm-4">
			<img class="ml-4 rounded-circle" src="/storage/profile/{{$User->profile_image}}" style="height: 75%; width: 50%;">
		</div>
		</div>
	</div>
@endsection