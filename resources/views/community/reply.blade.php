@extends('layouts.app')
@section('title','Replies')

@section('content')
<div class="container">
	<a href="/community" class="btn btn-success">Go Back</a>
</div>
	<div class="card-columns text-dark row d-flex justify-content-center">
	@if($post->approved == true)
	<div class="card bg-light col-md-6">
    	<div class="card-body">
      		<h5 class="card-title"><i class="fas fa-question"></i>) {{$post->title}} </h5>
      		<h6 class="pull-right">Date - {{$post->created_at}}</h6>
    		<p class="card-text">{{$post->body}}</p>
    		<h6 class="text-center">Replies</h6><hr width="30" class="bg-dark">
    		<hr class="bg-dark">
    		<p> >>{{$post->reply}}</p>
    		<hr class="bg-dark">
    		<h6 class="text-right">{{$post->reply_by}}</h6>
    		
    	</div>
  </div>
</div>


@if(Auth::guard('admins')->check() || Auth::guard('web')->check() || Auth::guard('cadmin')->check())
  <div class="d-flex justify-content-center">
			{!! Form::open(['action' =>['ReplyController@update', $post->id ], 'method' => 'POST']) !!}
			<hr>
			<div class="form-group">
					{{Form::label( 'title' , 'Reply' )}}
					{{Form::textarea('reply','',['class' => 'form-control', 'placeholder' => 'Reply Message Here'])}}
				</div>
					@error('body')
					<div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror			
                    <h6 class="text-center">[If it is already repied then this will replace all previous replies]</h6>
            {{Form::hidden('_method','PUT')}}
			{{Form::submit('Reply', ['class' => 'btn btn-success'])}}
			{!! Form::close() !!}
	</div>  
	@endif
  @endif
@endsection