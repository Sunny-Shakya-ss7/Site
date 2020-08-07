@extends('layouts.app')
 @section('title','About Leo')
@section('content')

    <style>
      @media (max-width: 1080px) {
      .v1 {
        left: 3rem !important;
      }
      .v2 {
        left: 4rem !important;
      }
      .v3 {
        left: 5rem !important;
      }
      .v4 {
        left: 6rem !important;
      }
    }

    @media (max-width: 700px) {
      .v1 {
        left: 2rem !important;
      }
      .v2 {
        left: 3rem !important;
      }
      .v3 {
        left: 4rem !important;
      }
      .v4 {
        left: 5rem !important;
      }
    }
    </style>
    
    <img class="vertical2 v1" src="{{asset('graphics/logo/line.png')}}" alt="line" style="left: 6rem;" />
    <img class="vertical2 v2" src="{{asset('graphics/logo/line.png')}}" alt="line" style="left: 7.5rem;" />
    <img class="vertical2 v3" src="{{asset('graphics/logo/line.png')}}" alt="line" style="left: 9rem;" />
    <img class="vertical2 v4" src="{{asset('graphics/logo/line.png')}}" alt="line" style="left: 10.5rem;"/>
    <img class="image2" src="{{asset('graphics/logo/a.png')}}" alt="logo" />

    <header class="header">
      <img class="bar" src="{{asset('graphics/logo/bar.png')}}" alt="bar" />
      <h1>About Leo Clubs</h1>
    </header>

    <div class="motto">
      <h1>Leo Club Motto</h1>
      <div class="wrapper">
        <div class="topic"><h3>Leadership</h3></div>
        <div class="line">
          <p>Leo members acquires skills as project organizers and motivators of
          their peers.</p>
        </div>
      </div>
      <div class="wrapper">
        <div class="topic"><h3>Experience</h3></div>
        <div class="line">
          <p>They discover how teamwork and cooperation can bring about change in
          their community and the world.</p>
        </div>
      </div>
      <div class="wrapper">
        <div class="topic"><h3>Opportunity</h3></div>
        <div class="line">
          <p>Leos develop positive traits and receive recognition for their
          contributions.</p>
        </div>
      </div>
    </div>

    <div class="container1">
      <h2>About Leo Clubs</h2>
      <article>
        <p>
          In 1957, Glen Side lions JIM GRAVER AND WILLIAM ERNST of Pennsylvania
          of USA persuaded 26 members of the Avington High school baseball team
          and nine other Avington High school student to form a service club.
        </p>
        <p>
          All together 35 members of Avington High school formed the world fi
          rst Leo Club- THE AVINGTON LEO CLUB in 1957 December 5. In 1964, the
          leo club program became and offi cial district project and started to
          grow rapidly in Pennsylvania and other su rrounding areas. Leo program
          was officially accepted by lions international on October 1967,
        </p>
        <p>
          <ul>
            <li>1967 - Two hundred leo club organized in 18 countries.</li>
            <li>1968 - Nine Hundred 18 clubs in 48 countries.</li>
            <li>1974 - Two Thousand Club were established.</li>
            <li>1984 - Four thousand club were established.</li>
            <li>1996 - Five thousand club were established.</li>
            <li>2007 - 50th anniversary of Leo club program.</li>
            <li>2017 - Seven thousand club were established in 140 countries.</li>
            <li>2018 - Two Leos appointed in international board as Leo Liasons.</li>
          </ul>
        </p>
      </article>
    </div>

    <div class="container2">
      <article>
        <h2>About Leo Clubs in Nepal</h2>
        <p>
          The first leo club in Nepal is Leo Club of Kathmandu, started in 1973
          sponsored by Lions Club of Kathmandu. Leo Club of Kathmandu Himalayas
          Patan is the oldest existing Leo Club of Nepal. At first, Leo Clubs in
          Nepal were included in District 321, 322-E of Bihar, India. Currently,
          there are four Districts: 325 A1, A2, B1, B2 and Multiple District 325
        </p>
      </article>
    </div>

@endsection