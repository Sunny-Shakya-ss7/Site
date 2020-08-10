@extends('layouts.app')
 @section('title','Leaderboard')
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
    <img class="vertical2 v1" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 6rem;" />
    <img class="vertical2 v2" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 7.5rem;" />
    <img class="vertical2 v3" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 9rem;" />
    <img class="vertical2 v4" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 10.5rem;"/>
    <img class="image2" src="{{asset('graphics/logo/a.png')}}" alt="logo" />

    <header class="header">
      <img class="bar" src="{{asset('graphics/png/bar.png')}}" alt="bar" />
      <h1>Leo LeaderBoard</h1>
    </header>
    <div class="table-responsive" style="overflow-x: auto;">
      <table class="table clubtable">
        <tr>
          <th>Club ID</th>
          <th>Leo CLub Name</th>
          <th>Points</th>
        </tr>

        @foreach ($Users as $User)
          <tr>
            <td>{{ $User->id}}</td>
            <td class="clearfix"><img src="storage/profile/{{$User->profile_image}}" alt="" height="7%" width="5%" class="rounded float-left"><label>{{ $User->club_name}}</label></td>
            <td>{{ $User->points}}</td>
          </tr>
        @endforeach
      </table>
    </div>
@endsection