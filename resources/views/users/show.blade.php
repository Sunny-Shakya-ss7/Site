@extends('layouts.app')
@section('title',$User->name)

@section('content')
	<div class="container">
		<div class="well" style="color:white;">
			<br>
			ID : {{$User->id}} <br>
			Name : {{$User->name}} <br>
			Email : {{$User->email}} <br>
			Created At : {{$User->created_at}}<br>
			Updated At : {{$User->updated_at}}
		
		</div>
	</div>
@endsection