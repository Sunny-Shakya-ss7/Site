@extends('layouts.app')
@section('title', 'Login')
@section('content')
<link rel="stylesheet" href="{{asset('css/form-style.css')}}">
	<div class="mainpage">
		<div class="container">
	</div>
	<div class="row">
		<div class="col-md-4  col-xs-8 signin">
			<form method="POST" action="{{ route('cadmin.login.submit') }}">
				 @csrf
				<div class="form-group">Admin Name
					<label class="sr-only"for="inlineFormInputGroup"></label>
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<div class="input-group-text">Leo</div>
						</div>		
						<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
						@error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
				</div><br>
				<div class="form-group"> E-mail
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
					@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				</div><br>
				<div class="form-group"> Password
					<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
					@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				</div>
				<div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
			
				<div class="form-group d-flex justify-content-center">
					 <button type="submit" class="btn btn-primary" style="font-weight: 800;">
                                    {{ __('LOGIN') }}
                                </button>
				</div>
			</form>
		</div>
		<div class="col-md-4 col-xs-8 slogan">
				<img src="/storage/images/logo-circled.png" alt="" height="50%" class="slogan-img" />
					<h1 class="slogan-text">
					  <a class="typewrite" data-period="2000" data-type='[ "TOGETHER WE CAN.", "TOGETHER WE WILL.", "TOGETHER WE MUST.", "LEO FOREVER." ]'>
					    <span class="wrap"></span>
					  </a>
					</h1>
			</div>
		</div>
		<div class="contact-menu">
			    <ul class="nav d-flex justify-content-around">
			      <li>
			      	<i class="fab fa-facebook" style="color:blue;"></i>
			      	<a href="https://facebook.com">&nbsp;&nbsp;Facebook</a>
			      </li>
			      <li>
			      	<i class="fab fa-instagram" style="color:red;"></i>
			      	<a href="#">&nbsp;&nbsp;Instagram</a>
			      </li>
			      <li>
			      	<i class="fab fa-twitter" style="color:#1DA1F2;"></i>
			      	<a href="#">&nbsp;&nbsp;Twittter</a></li>
			    </ul>
		</div>
	</div>
<script type="text/javascript" src="{{asset('js/typewriter.js')}}"></script>
@endsection