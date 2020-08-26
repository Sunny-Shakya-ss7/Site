@extends('layouts.app')
@section('title','Events/News')

@section('content')

	<hr class="gline"><h1 style="text-align: center;">LEO CLUB EVENTS</h1><hr class="gline"><br>

	<div class="container evtDiv">
		@if(Auth::guard('admins')->check() || Auth::guard('cadmin')->check())
			<a href="/news/create" class="btn btn-success ">Post Events/News</a>
			<hr>
		@endif
		@if(count($news)>0)
			@foreach($news as $new)
				<div class="well evtBody">
					<div class="row evtCont">
						<div class="col-md-4 col-sm-4 evtImg">
							<?php $img = json_decode($new->cover_image);?>
							<img id="evtPic" src="/storage/news/{{$img[0]}}" alt="pic" style="height:100%; width: 100%;">
							
						</div>
						<div class="col-md-8 col-sm-4 evtInfo">
							<h3><a style="color: white" href="/news/{{$new->id}}">{{$new->title}}- {{$new->slug}}</a></h3>
							<span class="text">{{$new->body}}</span>
							<small><i class="far fa-calendar-alt"></i> {{$new->created_at}} by {{$new->club_name}}</small>
						</div>
					</div>
				</div><br>
			@endforeach
			<div class="d-flex justify-content-center text-center"> {{$news->links()}}</div>
		@else
			<p>No News/Events Found</p>
		@endif
	</div>

@endsection