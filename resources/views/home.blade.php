@extends('layouts.app')

@section('content')
    <div class="container"> 
        <div class="well well-lg text-center">
            <br><br>
            Hey, 
            {{Auth::user()->name}}.
        You Are Logged In
        </div>
</div>
</div>
@endsection
