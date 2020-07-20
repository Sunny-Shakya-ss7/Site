@extends('layouts.app')
@section('title','Community')

@section('content')
	<div class="d-flex justify-content-center">
		 
			{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
			<hr>
				<a href="/community" class="btn btn-success">Go Back</a>
			<hr>
			<div class="form-group">
					{{Form::label( 'title' , 'Title' )}}
					{{Form::text('title','',['class' => 'form-control', 'placeholder' => 'What do you want to ask?'])}}
				</div>
					@error('title')
					<div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
			<div class="form-group">
					{{Form::label( 'title' , 'E-mail' )}}
					{{Form::email('email','',['class' => 'form-control', 'placeholder' => 'Email Address'])}}
				</div>
					@error('email')
					<div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
			<div class="form-group">
					{{Form::label( 'title' , 'Body' )}}
					{{Form::textarea('body','',['class' => 'form-control', 'placeholder' => 'Message'])}}
				</div>
					@error('body')
					<div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
			{{Form::submit('Submit', ['class' => 'btn btn-success'])}}
			{!! Form::close() !!}
	</div>   

@endsection