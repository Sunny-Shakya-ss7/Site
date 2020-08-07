@extends('layouts.app')
@section('title',$new->title)
@section('content')

	<div class="container">
		<a href="/news" class="btn btn-default">Go Back</a>
		<h1>{{$new->title}}- {{$new->slug}}</h1>
		<div class="well">
			<img class="ml-4" src="/storage/news/{{$new->cover_image}}" alt=""><br><hr>
			{!!$new->body!!}
		</div>	
		<hr>	
		<p class="text-right">Written on {{$new->created_at}}</p>
		<p class="text-right">By {{$new->signature}}</p>
		<hr>
		@if(Auth::guard('admins')->check())
			<div class="clearfix">
				<a href="/news/{{$new->id}}/edit" class="btn btn-primary float-left">Edit</a>
				{!!Form::open(['action' => ['NewsController@destroy', $new->id], 'method' => 'POST'])!!}
					{{Form::hidden('_method', 'DELETE' )}}
					{{Form::submit('Delete', ['class' => 'btn btn-danger float-right'])}}
				{!!Form::close()!!}
			</div>
	</div>
		@endif
		
@endsection