@extends('layouts.app')
@section('title','Community')

@section('content')
	<div class="text-center">
	<h3 class="mb-4 ">Ask Question Here</h3>
	</div>
	<div class=" container d-flex justify-content-center bg-secondary col-5">
			{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
			<hr>
				<a href="/community" class="btn btn-success">Go Back</a>
			<hr>

			

			<div class="form-group">
					<h4>{{Form::label( 'title' , 'Title' )}}</h4>	
					{{Form::label( 'title' , '- Be specific and imagine you’re asking a question to another person' )}}
					{{Form::text('title','',['class' => 'form-control', 'placeholder' => 'e.g What is the purpose of this club?'])}}
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
					<h4>{{Form::label( 'title' , 'Body' )}}</h4>
					{{Form::label( 'title' , '- Include all the information someone would need to answer your question' )}}
					{{Form::textarea('body','',['class' => 'form-control', 'placeholder' => 'Type here...'])}}
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