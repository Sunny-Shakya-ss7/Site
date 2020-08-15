@extends('layouts.app')
@section('title', 'Register')
@section('content')
<div class="container col-6 bg-secondary">
        <a href="/user" class="btn btn-success">Go Back</a>
        <div class="text-center">
            <h1 class="mt-1"> Register User</h1>
        </div>
        <hr>
            {!! Form::open(['action' => 'UserController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
            <div class="form-group mt-4">
                    {{Form::label( 'title' , 'Name' )}}
                    {{Form::text('name','',['class' => 'form-control col-8', 'placeholder' => 'Full Name'])}}
            </div> 
            @error('name')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
            <div class="form-group mt-3">
                    {{Form::label( 'title' , 'Email' )}}
                    {{Form::email('email','',['class' => 'form-control col-8 ', 'placeholder' => 'Email Address'])}}
            </div>
            @error('email')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
            <div class="form-group mt-3">
                    {{Form::label( 'title' , 'Password' )}}
                    {{Form::password( 'password',['class' => 'form-control col-8 p-4', 'placeholder' => 'Password'])}}
            </div>
            @error('password')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
             <div class="form-group mt-3">
                    {{Form::label( 'title' , 'Confim Password' )}}
                    {{Form::password( 'confim_password',['class' => 'form-control col-8 p-4', 'placeholder' => 'Retype Password'])}}
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
            <div class="form-group mt-4">
                    {{Form::label( 'title' , 'Date of Birth' )}}
                    {{Form::date('dob','',['class' => 'form-control col-8 p-4', 'placeholder' => 'Date of Birth'])}}
            </div> 
            @error('dob')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
            <div class="form-group mt-4">
                    {{Form::label( 'title' , 'Club Post' )}}
                    {{Form::text('club_post','',['class' => 'form-control col-8 p-4', 'placeholder' => 'Club Current Post'])}}
            </div> 
            @error('club_post')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
            {{Form::submit('Register User', ['class' => 'btn btn-primary', 'style'=> 'margin-left:16%;'])}}
            {!! Form::close() !!}
    </div>   
@endsection
