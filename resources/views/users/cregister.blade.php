@extends('layouts.app')
@section('title', 'Register')
@section('content')
<div class="container col-6 bg-secondary">
        <a href="/userall" class="btn btn-success">Go Back</a>
        <div class="text-center">
            <h1>Register Admin</h1>
        </div>
        <hr>
      
            {!! Form::open(['action' => 'CadminController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
            <div class="form-group">
                    {{Form::label( 'title' , 'User Name' )}}
                    {{Form::text('username','',['class' => 'form-control col-8', 'placeholder' => 'User Name'])}}
            </div> 
            @error('username')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
            <div class="form-group">
                    {{Form::label( 'title' , 'Password' )}}
                    {{Form::password( 'password',['class' => 'form-control col-8 p-3', 'placeholder' => 'Password'])}}
            </div>
            @error('password')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
             <div class="form-group">
                    {{Form::label( 'title' , 'Confim Password' )}}
                    {{Form::password( 'confim_password',['class' => 'form-control col-8', 'placeholder' => 'Retype Password'])}}
            </div>
            @error('confim_password')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
            <div class="form-group">
                {{Form::label('title','Official Club Logo')}}<br>
                {{Form::File('profile_image')}}
            </div> 
            @error('profile_image')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
            <div class="form-group">
                    {{Form::label( 'title' , 'Club Name' )}}
                    {{Form::text('club_name','',['class' => 'form-control col-8', 'placeholder' => 'Club Name'])}}
            </div> 
            @error('club_name')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror<br>
            {{Form::submit('Register Admin', ['class' => 'btn btn-success', 'style'=> 'margin-left:16%;'])}}
            {!! Form::close() !!}<br><br>
    </div>   
@endsection
