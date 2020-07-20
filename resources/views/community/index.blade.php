@extends('layouts.app')
@section('title','Community')

@section('content')
<div class="container">
	<a href="community/create" class="btn btn-success">Ask question</a>
</div> 
@if(count($posts)>0)
<div class="card-columns text-dark row d-flex justify-content-center">
	@foreach($posts as $post)
	@if($post->approved == true)
	<div class="card bg-light col-md-6">
    	<div class="card-body">
      		<h5 class="card-title"><i class="fas fa-question"></i>) {{$post->title}} </h5>
      		<h6 class="pull-right">Date - {{$post->created_at}}</h6>
      		<div class="clearfix">
    		<a href="community/{{$post->id}}" class="btn btn-success float-left">View Replies</a>
    		@if(Auth::guard('admins')->check())
    		{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
			{{Form::hidden('_method', 'DELETE' )}}
			{{Form::submit('Delete', ['class' => 'btn btn-danger float-right'])}}
			{!!Form::close()!!}
			@endif
		</div>
    	</div>
  </div>
  @endif
@endforeach

@foreach($posts as $post)
@if($post->approved == false)
 @if(Auth::guard('admins')->check())
  <div class="card bg-light col-md-6">
 <h6 class="text-center">Unapproved Post</h6>
    	<div class="card-body">
      		<h5 class="card-title"><i class="fas fa-question"></i>) {{$post->title}} </h5>
      		<h6 class="pull-right">Date - {{$post->created_at}}</h6>
    		<div class="clearfix">
    		{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
			{{Form::hidden('_method', 'DELETE' )}}
			{{Form::submit('Delete', ['class' => 'btn btn-danger float-left'])}}
			{!!Form::close()!!}

    		{!! Form::open(['action' =>['PostsController@update', $post->id ], 'method' => 'POST']) !!}
    		{{Form::hidden('_method','PUT')}}
			{{Form::submit('Approve', ['class' => 'btn btn-success float-right'])}}
			{!! Form::close() !!}
		</div>
    	</div>
  </div>
  @endif
@endif
@endforeach

</div>
@endif
<div class="d-flex justify-content-center">
	{{$posts->links()}}
</div>
@endsection
