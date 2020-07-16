@extends('layouts.app')
@section('title',$User->name)

@section('content')
	<div class="container">
		<div class="well" style="color:white;">
			<br>
			<h1 class="text-center">{{$User->name}}</h1>
		</div> 
			<a href="/user" class="btn btn-default">Go Back</a>
			<div class="row">
			<div class="col-md-4 col-sm-4">
			ID : {{$User->id}} <br>
			Name : {{$User->name}} <br>
			Email : {{$User->email}} <br>
			Created At : {{$User->created_at}}<br>
			Updated At : {{$User->updated_at}}
		</div>
		<div class="col-md-8 col-sm-4">
			<img class="ml-4 rounded-circle" src="/storage/profile/{{$User->profile_image}}" style="height: 75%; width: 50%;">
		</div>
		</div>
	</div>
@endsection