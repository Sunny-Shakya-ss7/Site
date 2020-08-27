@extends('layouts.app')
@section('title','Community')

@section('content')

<div class="container evtDiv spaDiv">
<div class="container mt-4 mb-4 text-center"> 
	<hr class="gline"><h1>Welcome to our forum</h1><hr class="gline">
</div>
<div class="container mb-4 text-center">
	<a href="community/create" class="btn btn-success align-center">Ask question</a>
</div> 
@if(count($posts)>0)
<div class="card-columns  row d-flex justify-content-center " >
	@foreach($posts as $post)
	@if($post->approved == true)
	
	<div class="card  text-light evtDiv" style="font-family:Times New Roman;background:#24242a;">
    	<div class="card-body ">
			<h4 class="card-title mb-4 "><i class="fas fa-question"></i>) {{$post->title}} </h4>
			<h5 class="m-4">{{$post->body}}</h5>
      		<div class="clearfix">
    		<a href="community/{{$post->id}}" class="btn btn-success float-right">View Replies</a>
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
</div>
@foreach($posts as $post)
@if($post->approved == false)
 @if(Auth::guard('admins')->check())
  <div class="card bg-light col-md-6 bg-dark" >
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
