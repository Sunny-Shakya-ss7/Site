@extends('layouts.app')
@section('title', $new->title)
@section('content')

	<br><a href="/news" class="btn btn-success gb">Go Back</a><br><br>
	<h1 style="text-align: center">{{$new->title}}- {{$new->slug}}</h1><br>
	
	<div class="evtImgBody">
		<?php 
			$images = json_decode($new->cover_image, true);
		?>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				{{ $isFirst = true }}
				@foreach ($images as $image)
					<div class="carousel-item {{{ $isFirst ? 'active' : '' }}}">
						<img class="evtImgShow" src="/storage/news/{{ $image }}" alt="img">
					</div>
					{{ $isFirst = false }}
				@endforeach	
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<br><br>
	
	<div class="container">
		<div class="evtDet">
			{!!$new->body!!}
		</div>
		<hr class="evthr">	
			<p class="text-right">Written on {{$new->created_at}}</p>
			<p class="text-right">By {{$new->club_name}}</p>
		<hr class="evthr">
		@if(Auth::guard('admins')->check())
			<div class="clearfix">
				<a href="/news/{{$new->id}}/edit" class="btn btn-primary float-left">Edit</a>
				{!!Form::open(['action' => ['NewsController@destroy', $new->id], 'method' => 'POST'])!!}
					{{Form::hidden('_method', 'DELETE' )}}
					{{Form::submit('Delete', ['class' => 'btn btn-danger float-right'])}}
				{!!Form::close()!!}
			</div>
		@endif
	</div><br>

@endsection