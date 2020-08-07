@extends('layouts.app')
@section('title', 'Admin Profile')
@section('content')
    <div class="container"> 
        <div class="well well-lg text-center">
            <br><br>
         	Hey, 
        @if(Auth::guard('cadmin')->check())
        {{Auth::guard('cadmin')->user()->name}}
             You Are Logged In as Admin<br>
        @endif
        @if(Auth::guard('web')->check())
            You Are Logged In as User 
         @endif
        </div>
</div>
@endsection
