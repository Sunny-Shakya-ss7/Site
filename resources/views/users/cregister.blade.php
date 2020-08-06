@extends('layouts.app')
@section('title', 'Register')
@section('content')
<div class="container">
        <div class="text-center">
            <h1>Register User</h1>
        </div>
        <a href="/user" class="btn btn-success">Go Back</a>
        <hr>
            {!! Form::open(['action' => 'CadminController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
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
             <div class="form-group">
                    {{Form::label( 'title' , 'Date of Birth' )}}
                    {{Form::date('dob','',['class' => 'form-control col-md-5', 'placeholder' => ''])}}
            </div> 
            @error('dob')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
            @enderror
            <div class="form-group">
                {{Form::label('title','Profile Photo [Optional]')}}<br>
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
                    @enderror
            <div class="form-group">
                    {{Form::label( 'title' , 'Club Post' )}}
                    {{Form::text('club_post','',['class' => 'form-control col-md-5', 'placeholder' => 'Club Post'])}}
            </div> 
            @error('club_post')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
            {{Form::submit('Reg Admin', ['class' => 'btn btn-success', 'style'=> 'margin-left:16%;'])}}
            {!! Form::close() !!}
    </div>   
@endsection
