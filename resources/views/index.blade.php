@extends('layouts.app')
@section('title', 'Home')
@section('content')


<!background color >

      <div class="container">
        <img
          src="{{asset('graphics/logo/leo.png')}}"
          alt="Responsive image"
        />
      </div>
      <div class="col-12">
        <br />
        <br />
        <br />
        <br />
        <br />
        @guest
      <div class="animatedbutton">
        <button  class="animated">
          <a href="#">Join Now</a>
        </button>
      </div>
      @endguest
        <br />
        <br/>
      </div>
 @endsection
