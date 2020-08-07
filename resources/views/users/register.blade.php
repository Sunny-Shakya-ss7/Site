@extends('layouts.app')
@section('title', 'Register')
@section('content')
<div class="container bg-secondary ">
        <a href="/user" class="btn btn-success">Go Back</a>
        <div class="text-center">
            <h1 class="mt-1"> Register User</h1>
        </div>
        <hr>
        <div class="container" >
             <img class="img-responsive rounded-circle" src="{{asset('graphics/logo/big_logo.jpg')}}" style="position:absolute;top:34%;left:45%;height:45%;width:22%"   >
        </div>
            {!! Form::open(['action' => 'UserController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
            <div class="form-group mt-4">
                    {{Form::label( 'title' , 'Name' )}}
                    {{Form::text('name','',['class' => 'form-control col-md-5 p-4', 'placeholder' => 'Full Name'])}}
            </div> 
            @error('name')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
            <div class="form-group mt-3">
                    {{Form::label( 'title' , 'Email' )}}
                    {{Form::email('email','',['class' => 'form-control col-md-5 p-4', 'placeholder' => 'Email Address'])}}
            </div>
            @error('email')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
            <div class="form-group mt-3">
                    {{Form::label( 'title' , 'Password' )}}
                    {{Form::password( 'password',['class' => 'form-control col-md-5 p-4', 'placeholder' => 'Password'])}}
            </div>
            @error('password')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
             <div class="form-group mt-3">
                    {{Form::label( 'title' , 'Confim Password' )}}
                    {{Form::password( 'confim_password',['class' => 'form-control col-md-5 p-4', 'placeholder' => 'Retype Password'])}}
            </div>
            @error('confim_password')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
            <div class="form-group mt-3">
                {{Form::label('title','Profile Photo [Optional]')}}<br>
                {{Form::File('profile_image')}}
            </div> 
            @error('profile_image')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
            {{Form::submit('Register User', ['class' => 'btn btn-primary', 'style'=> 'margin-left:16%;'])}}
            {!! Form::close() !!}
    </div>   
@endsection
