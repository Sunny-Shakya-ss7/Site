@extends('layouts.app')
@section('title', 'Register')
@section('content')
<div class="container">
        <div class="text-center">
            <h1>Register User</h1>
        </div>
        <a href="/user" class="btn btn-default">Go Back</a>
        <hr>
            {!! Form::open(['action' => 'UserController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
            <div class="form-group">
                    {{Form::label( 'title' , 'Name' )}}
                    {{Form::text('name','',['class' => 'form-control col-md-5', 'placeholder' => 'Full Name'])}}
            </div> 
            @error('name')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
            <div class="form-group">
                    {{Form::label( 'title' , 'Email' )}}
                    {{Form::email('email','',['class' => 'form-control col-md-5', 'placeholder' => 'Email Address'])}}
            </div>
            @error('email')
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
            {{Form::submit('Reg User', ['class' => 'btn btn-primary', 'style'=> 'margin-left:16%;'])}}
            {!! Form::close() !!}
    </div>   
@endsection
