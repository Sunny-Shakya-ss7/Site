@extends('layouts.app')
@section('title', 'Home')
@section('content')


<!background color >

      <div class="container">
        <img
          src="https://scontent.fktm8-1.fna.fbcdn.net/v/t1.15752-9/107071849_281722563150112_1848598037131003840_n.png?_nc_cat=100&_nc_sid=ae9488&_nc_ohc=7tzvBIHMLaMAX-PoAgt&_nc_ht=scontent.fktm8-1.fna&oh=5825d92b10cc52bcf125ec2b4b4a5a31&oe=5F2D35F0"
          class="img-fluid"
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
