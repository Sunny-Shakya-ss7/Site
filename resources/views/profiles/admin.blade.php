@extends('layouts.app')
@section('title', 'Super Profile')
@section('content')
    <div class="container"> 
        <div class="well well-lg text-center">
            <br><br>
         	Hey, 
        {{Auth::user()->name}}.
         @if(Auth::guard('admins')->check())
        	You Are Logged In as Super Admin<br>
        @endif
         @if(Auth::guard('cadmin')->check())
             You Are Logged In as Admin<br>
        @endif
        @if(Auth::guard('web')->check())
			You Are Logged In as User 
		 @endif
        </div>
</div>
</div>
@endsection
