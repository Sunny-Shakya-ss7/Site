<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width-device-width, initial-scale=1" />
    <title>{{config('app.name','LDC 325 A2')}} - @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!--CSS / SCSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/button.css')}}">

</head>
  <body>
       <!Navigation>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="/" >
          <img class="rounded" 
            src="{{asset('graphics/logo/logo.png')}}"
            width="40px" />
          <label style="cursor: pointer;"> Lions Club International</label>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"> </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"> Discover </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> About us </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> Events </a>
            </li>

            <!--Login And Logout -->
              @if (Route::has('login'))
                <li class="nav-item">
                  @auth
                  @if(Auth::guard('admins')->check())
                        <a class="nav-link" href="{{ url('/admin') }}">Admin Profile</a>
                        @else
                        <a class="nav-link" href="{{ url('/home') }}">Profile</a>
                      </li>
                  @endif
                    @if(Auth::guard('admins')->check())
                      <li class="nav-item">
                         <a class="nav-link" href="{{ url('admin/logout') }}">{{ __(' Admin Logout') }}</a>
                      </li>
                      @else
                      <li class="nav-item">
                         <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                          </a>
                      </li>
                      @endif
                    @else
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                        @if (Route::has('register'))
                          <a class="nav-link" href="{{ route('register') }}">Register</a>   
                </li>
                        @endif
                    @endauth
            @endif

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="background">
    @include('inc.messages')
    @yield('content')
  </div>
  </body>
</html>