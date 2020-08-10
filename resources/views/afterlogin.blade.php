    @extends('layouts.app')
    @section('title','Welcome')

    @section('content')
    <link rel="stylesheet" href="{{asset('css/welcome-style.css')}}">
    <header>
        <img class="header-bg" src="/graphics/png/main-bg.png" alt="">
        <img class="header-gold" src="/graphics/png/header-gold.png" alt="">
        <img class="header-black" src="/graphics/png/header-black.png" alt="">
        <h1 class="header-content1">Welcome to LEO Family</h1>
        <img class="ellipse-gold" src="/graphics/png/ellipse-gold.png" alt="">
        <img class="logo" src="/graphics/logo/logo_alt.png" alt="">
        <img class="circle-design" src="/graphics/pngcircle_design.png" alt="">
        <h1 class="header-content2">
            “Small acts, when multiplied by millions of people, can transform the world.”
        </h1>
        <img class="group" src="/graphics/png/group.png" alt="">
        <img class="footer-grad" src="/graphics/png/footer-grad.png" alt="">
        <img class="footer-black" src="/graphics/png/footer-black.png" alt="">
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
    </header>
    @endsection