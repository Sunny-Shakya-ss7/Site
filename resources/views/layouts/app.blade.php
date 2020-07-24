<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width-device-width, initial-scale=1" />
    <title>{{config('app.name','LDC 325 A2')}} - @yield('title')</title>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://kit.fontawesome.com/66fc271527.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

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
            <li class="nav-item">
              <a class="nav-link" href="#"> Discover </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/gallery"> Gallery </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about"> About us </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/news"> Events </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/spa"> SPA </a>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="/community"> Community </a>
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
                          <a class="nav-link" href="{{ url('/user') }}">View User</a>   
                      </li>
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
  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
  <script>
    CKEDITOR.replace( 'summary_ckeditor' );
  </script>
  </body>
</html>