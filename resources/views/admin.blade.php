@extends('layouts.app')
@section('title', 'Admin-Profile')
@section('content')
    <div class="container"> 
        <div class="well well-lg text-center">
            <br><br>
            Hey, 
            {{Auth::user()->name}}.
        You Are Logged In as Admin
        </div>
</div>
</div>
@endsection
