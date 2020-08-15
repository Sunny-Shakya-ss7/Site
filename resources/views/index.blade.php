<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width-device-width, initial-scale=1" />
	<title>{{config('app.name','LDC 325 A2')}} - Home</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings_1.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome-4.3.0.css"/>
<link rel="stylesheet" type="text/css" href="css/menu_1.css">
<link rel="stylesheet" type="text/css" href="css/carousel_2.css"/>
<link rel="stylesheet" type="text/css" href="css/index_style.css"/>
<link rel="stylesheet" type="text/css" href="css/carousel_1.css"/>
<!--CSS / SCSS -->

</head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" style="border-radius: 0px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <img class="rounded" 
            src="{{asset('graphics/logo/logo_alt.png')}}"
            width="40px"  style="position:absolute;"/>
          <label style="cursor: pointer; font-size: 3vh; font-weight: 500;margin-left: 20%;margin-top:2%;"> Leo District Club 325 A2</label>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"> </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" style="margin-left: 30%;">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/"> Home</a>
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
            @if(Auth::guard('cadmin')->check() || Auth::guard('admins')->check())
              <li class="nav-item">
                <a class="nav-link" href="/spa"> SPA </a>
              </li>
          @endif
             <li class="nav-item">
              <a class="nav-link" href="/community"> Community </a>
            </li>
            <!--Login And Logout -->
            @if(Auth::guard('admins')->check() || Auth::guard('cadmin')->check() || Auth::guard('web')->check())
            @if (Route::has('login'))
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="">
                      @if(Auth::guard('admins')->check())
                        <a class="dropdown-item" href="{{ url('/admin') }}">Super Profile</a>
                        <a class="dropdown-item" href="{{ url('/userall') }}">View Users</a>   
                        @elseif(Auth::guard('cadmin')->check())
                        <a class="dropdown-item" href="{{ url('/cadmin') }}">Admin Profile</a>
                        <a class="dropdown-item" href="{{ url('/user') }}">View Users</a>
                      @else
                        <a class="dropdown-item" href="{{ url('/home') }}">Profile</a>
                        @endif
                        <a class="dropdown-item" href="{{ url('/leaderboard') }}">LeaderBoard</a>
                        <div class="dropdown-divider"></div>
                        @if(Auth::guard('admins')->check())
                        <a class="dropdown-item" href="{{ url('admin/logout') }}">{{ __(' Admin Logout') }}</a>
                        @elseif(Auth::guard('cadmin')->check())
                        <a class="dropdown-item" href="{{ url('cadmin/logout') }}">{{ __('Logout') }}</a>
                        @else
                        <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                        </a> 
                      </div>
              </li>
                  @endif 
              @endif 
              @else
              <li class="nav-item">
                <a class="nav-link"  href="{{ route('login') }}">Login</a>
              </li>
          @endif
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </ul>
        </div>
      </div>
    </nav>
<div id="wrapper">
<section class="slider-section">
<div class="tp-banner-container" >
<div class="tp-banner" style="height: 115%;">
<ul >
<li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="" data-saveperformance="off" data-title="Slide">
<img src="graphics/png/bg2.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
<div class="tp-caption slider_layer_01 text-center lft tp-resizeme" data-x="center" data-y="220" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">LOGO
</div>
</li>
<li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="" data-saveperformance="off" data-title="Slide">
<img src="graphics/png/bg1.jpg" alt="fullslide1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
<div class="tp-caption slider_layer_01 text-center lft tp-resizeme" data-x="center" data-y="250" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">LOGO
</div>
</li>
<li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="" data-saveperformance="off" data-title="Slide">
<img src="graphics/png/bg3.jpg" alt="fullslide1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
<div class="tp-caption slider_layer_01 text-center lft tp-resizeme" data-x="center" data-y="250" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">LOGO
</div>
</li>
</ul>
</div>
</div>
</section>
<section class="section darkskin fullscreen paralbackground parallax" style="background-image:url(graphics/png/bg4.jpg)" data-img-width="1627" data-img-height="868" data-diff="100">
<div class="overlay"></div>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="section-title text-center">
<h4>What is Lorem Ipsum?</h4>
</div>
</div>
</div>
<div class="row service-center">
<div class="col-md-4 col-sm-6">
<div class="feature-list text-justify">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="feature-list align-center">
<img src="graphics/logo/logo_alt.png" alt="" style="margin-left: 25%;">
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="feature-list text-justify">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>
</div>
</div>
</div>
</section>
<section class="grey section">
<div class="row-fluid">
<div class="col-md-6 myimg">
	<img src="graphics/png/bg2.jpg" alt="">
</div>
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-6">
<div class="section-container nopadding">
<div class="textrotate">
<ul class="bxslider">
<li>
<div class="big-title">
<h3><span>WHO</span> WE ARE</h3>
<div class="border-title"></div>
</div>
<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</li>
<li>
<div class="big-title">
<h3><span>WHAT</span> WE DO</h3>
<div class="border-title"></div>
</div>
<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</li>
<li>
<div class="big-title">
<h3><span>OUR</span> MISSION</h3>
<div class="border-title"></div>
</div>
<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="grey section">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="section-title text-center">
<h4>Events</h4>
</div>
</div>
</div>
<div class="row blog-widget">
<div class="col-md-4 col-sm-6">
<div class="blog-wrapper">
<div class="blog-title">
<h2><a href="single.html" title="">We are rocking the Events</a></h2>
<div class="post-meta">
<span>
<i class="fa fa-user"></i>
<a href="#">Leo Club Name</a>
</span>
<span>
<i class="fa fa-clock"></i>
<a href="#">2020/06/10</a>
</span>
</div>
</div>
<div class="blog-image">
<a href="single.html" title=""><img src="graphics/png/bg4.jpg" alt="" class="img-responsive"></a>
</div>
<div class="blog-desc">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since theown printer took.</p>
<a href="single.html" class="btn btn-default btn-block">Read More</a>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="blog-wrapper">
<div class="blog-title">
<h2><a href="single.html" title="">We are rocking the Events</a></h2>
<div class="post-meta">
<span>
<i class="fa fa-user"></i>
<a href="#">Sagar Chhetri</a>
</span>
<span>
<i class="fa fa-clock"></i>
<a href="#">2020/06/10</a>
</span>
</div>
</div>
<div class="blog-image">
<a href="single.html" title=""><img src="graphics/png/bg2.jpg" alt="" class="img-responsive"></a>
</div>
<div class="blog-desc">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since theown printer took.</p>
<a href="single.html" class="btn btn-default btn-block">Read More</a>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="blog-wrapper">
<div class="blog-title">
<h2><a href="single.html" title="">We are rocking the Events</a></h2>
<div class="post-meta">
<span>
<i class="fa fa-user"></i>
<a href="#">Leo Club Name</a>
</span>
<span>
<i class="fa fa-clock"></i>
<a href="#">2020/06/10</a>
</span>
</div>
</div>
<div class="blog-image">
<a href="single.html" title=""><img src="graphics/png/bg3.jpg" alt="" class="img-responsive"></a>
</div>
<div class="blog-desc">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since theown printer took.</p>
<a href="single.html" class="btn btn-default btn-block">Read More</a>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="white section">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="section-title text-center">
<h4>Our Official Representatives</h4>
<p>Together We Can</p>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="content-widget">
<div class="team-members row">
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="team">
<img src="graphics/png/profile_1.jpg" alt="" class="rounded img-responsive wow fadeInUp">
<div class="team-hover-content">
<h5>Jenny Kennedy</h5>
<span>Advertising Manager</span>
<quote>"Curabitur ultrices nec est nec vestibulum. Maecenas tincidunt pretium lacinia. Nullam purus dolor, tempor et lacinia quis, viverra quis erat"</quote>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="team">
<img src="graphics/png/profile_1.jpg" alt="" class="img-responsive wow fadeInUp">
<div class="team-hover-content">
<h5>Jenny Kennedy</h5>
<span>Advertising Manager</span>
<quote>"Curabitur ultrices nec est nec vestibulum. Maecenas tincidunt pretium lacinia. Nullam purus dolor, tempor et lacinia quis, viverra quis erat"</quote>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="team">
<img src="graphics/png/profile_1.jpg" alt="" class="img-responsive wow fadeInUp">
<div class="team-hover-content">
<h5>Jenny Kennedy</h5>
<span>Advertising Manager</span>
<quote>"Curabitur ultrices nec est nec vestibulum. Maecenas tincidunt pretium lacinia. Nullam purus dolor, tempor et lacinia quis, viverra quis erat"</quote>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="team">
<img src="graphics/png/profile_1.jpg" alt="" class="img-responsive wow fadeInUp">
<div class="team-hover-content">
<h5>Jenny Kennedy</h5>
<span>Advertising Manager</span>
<quote>"Curabitur ultrices nec est nec vestibulum. Maecenas tincidunt pretium lacinia. Nullam purus dolor, tempor et lacinia quis, viverra quis erat"</quote>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="white section">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="section-title text-center">
<h4>Our Most Engaing Clubs</h4>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div id="bbpress-forums">
<ul class="bbp-forums">
<li class="bbp-header">
<ul class="forum-titles">
<li class="bbp-forum-info">Club Name</li>
<li class="bbp-forum-topic-count">Points</li>
</ul>
</li>
<li class="bbp-body">
<ul class="forum type-forum">
<li class="bbp-forum-info">
<img src="graphics/logo/logo_alt.png" alt="" class="alignleft img-thumbnail">
<h3 class="bbp-forum-title" title="General">Binary Beasts</h3>
</li>
<li class="bbp-forum-reply-count">21</li>
</p>
</li>
</ul>
</li>
<li class="bbp-body">
<ul class="forum type-forum">
<li class="bbp-forum-info">
<img src="graphics/logo/logo_alt.png" alt="" class="alignleft img-thumbnail">
<h3 class="bbp-forum-title" title="General">Binary Beasts</h3>
</li>
<li class="bbp-forum-reply-count">44</li>
</p>
</li>
</ul>
</li>
<li class="bbp-body">
<ul class="forum type-forum">
<li class="bbp-forum-info">
<img src="graphics/logo/logo_alt.png" alt="" class="alignleft img-thumbnail">
<h3 class="bbp-forum-title" title="General">Binary Beasts</h3>
</li>
<li class="bbp-forum-reply-count">146</li>
</p>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>
</section>
<section class="white section">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="section-title text-center">
<h4>Contact Us</h4>
</div>
</div>
</div>
<div class="row contact-wrapper">
<div class="col-md-9 col-sm-9 col-xs-12 content-widget">
<div class="widget-title">
<h4>Contact Form</h4>
<hr>
</div>
<div id="contact_form" class="contact_form row">
<div id="message"></div>
<form id="contactform" action="http://templatevisual.com/demo/learnplus/contact.php" name="contactform" method="post">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="text" name="name" id="name" class="form-control" placeholder="Name *">
<input type="text" name="email" id="email" class="form-control" placeholder="Email *">
<input type="text" name="topic" id="topic" class="form-control" placeholder="Topic *">
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
<textarea class="form-control" name="comments" id="comments" rows="6" placeholder=""></textarea>
<button type="submit" value="SEND" id="submit" class="btn btn-primary btn-block">Send Message</button>
</div>
</form>
</div>
</div>
<div class="col-md-3 col-sm-3 col-xs-12 content-widget">
<div class="widget-title">
<h4>Contact Details</h4>
<hr>
</div>
<div class="contact-list">
<ul class="contact-details">
<li><i class="fa fa-link"></i> <a href="#">www.yoursite.com</a></li>
<li><i class="fa fa-envelope"></i> <a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
<li><i class="fa fa-phone"></i> +977-984444444</li>
<li><i class="fa fa-home"></i> Kathmandu, Nepal</li>
</ul>
</div>
</div>
</div>
</div>
</section>
<section class="copyright">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<p>Developed by Binary Beasts  &copy; <a href="#"> Leo Districat Club 325 A2</a></p>
</div>
<div class="col-md-6 text-right">
<ul class="list-inline">
<li><i class="fab fa-facebook"></i><a href="#">&nbsp; Facebook </a></li>
<li><i class="fab fa-instagram"></i><a href="#"> Instagram </a></li>
<li><i class="fab fa-twitter"></i><a href="#"> Twitter </a></li>
</ul>
</div>
</div>
</div>
</section>
</div>
<script src="js/jquery.min_1.js"></script>
<script src="js/bootstrap.min_1.js"></script>
<script>eval(mod_pagespeed_gFRwwUbyVc);</script>
<script>eval(mod_pagespeed_rQwXk4AOUN);</script>
<script>eval(mod_pagespeed_U0OPgGhapl);</script>
<script src="js/carousel_4.js"></script>
<script>eval(mod_pagespeed_6Ja02QZq$f);</script>
<script>eval(mod_pagespeed_KxQMf5X6rF);</script>
<script src="rs-plugin/js/jquery.themepunch.tools.min.js_1.js"></script>
<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script>jQuery(document).ready(function(){jQuery('.tp-banner').show().revolution({dottedOverlay:"none",delay:16000,startwidth:1170,startheight:620,hideThumbs:200,thumbWidth:100,thumbHeight:50,thumbAmount:5,navigationType:"none",navigationArrows:"solo",navigationStyle:"preview3",touchenabled:"on",onHoverStop:"on",swipe_velocity:0.7,swipe_min_touches:1,swipe_max_touches:1,drag_block_vertical:false,parallax:"mouse",parallaxBgFreeze:"on",parallaxLevels:[10,7,4,3,2,5,4,3,2,1],parallaxDisableOnMobile:"off",keyboardNavigation:"off",navigationHAlign:"center",navigationVAlign:"bottom",navigationHOffset:0,navigationVOffset:20,soloArrowLeftHalign:"left",soloArrowLeftValign:"center",soloArrowLeftHOffset:20,soloArrowLeftVOffset:0,soloArrowRightHalign:"right",soloArrowRightValign:"center",soloArrowRightHOffset:20,soloArrowRightVOffset:0,shadow:0,fullWidth:"on",fullScreen:"off",spinner:"spinner4",stopLoop:"off",stopAfterLoops:-1,stopAtSlide:-1,shuffle:"off",autoHeight:"off",forceFullWidth:"off",hideThumbsOnMobile:"off",hideNavDelayOnMobile:1500,hideBulletsOnMobile:"off",hideArrowsOnMobile:"off",hideThumbsUnderResolution:0,hideSliderAtLimit:0,hideCaptionAtLimit:0,hideAllCaptionAtLilmit:0,startWithSlide:0,fullScreenOffsetContainer:""});});</script>
<script src="js/bxslider.js.pagespeed.jm.js"></script>
<script type="text/javascript">(function($){"use strict";$('.bxslider').bxSlider({mode:'vertical',minSlides:1,maxSlides:1,slideMargin:0,pager:false,nextText:'<i></i>',prevText:'<i></i>',speed:1000,auto:true});})(jQuery);
</script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="https://kit.fontawesome.com/66fc271527.js" crossorigin="anonymous"></script>
 </div>
  </body>
</html>
