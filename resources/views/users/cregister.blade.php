@extends('layouts.app')
@section('title', 'Register')
@section('content')
<div class="container bg-secondary rounded"><br>
        <a href="/userall" class="btn btn-success">Go Back</a>
        <div class="text-center">
            <h1>Register Admin</h1>
        </div>
        <hr>
        <div class="container" >
             <img class="img-responsive rounded-circle" src="{{asset('graphics/logo/big_logo.jpg')}}" style="position:absolute;top:30%;left:43%;height:40%;width:25%; max-width: 100%;  height: auto;"   >
        </div>
            {!! Form::open(['action' => 'CadminController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
            <div class="form-group">
                    {{Form::label( 'title' , 'User Name' )}}
                    {{Form::text('username','',['class' => 'form-control col-md-5', 'placeholder' => 'User Name'])}}
            </div> 
            @error('username')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
            <div class="form-group">
                    {{Form::label( 'title' , 'Password' )}}
                    {{Form::password( 'password',['class' => 'form-control col-md-5', 'placeholder' => 'Password'])}}
            </div>
            @error('password')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
             <div class="form-group">
                    {{Form::label( 'title' , 'Confim Password' )}}
                    {{Form::password( 'confim_password',['class' => 'form-control col-md-5', 'placeholder' => 'Retype Password'])}}
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
                    {{Form::text('club_name','',['class' => 'form-control col-md-5', 'placeholder' => 'Club Name'])}}
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
