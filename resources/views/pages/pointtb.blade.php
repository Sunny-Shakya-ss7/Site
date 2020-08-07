@extends('layouts.app')
 @section('Leaderboard')
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

    <img class="vertical v1" src="{{asset('graphics/logo/line.png')}}" alt="line" style="left: 6rem;" />
    <img class="vertical v2" src="{{asset('graphics/logo/line.png')}}" alt="line" style="left: 7.5rem;" />
    <img class="vertical v3" src="{{asset('graphics/logo/line.png')}}" alt="line" style="left: 9rem;" />
    <img class="vertical v4" src="{{asset('graphics/logo/line.png')}}" alt="line" style="left: 10.5rem;"/>
    <img class="image" src="{{asset('graphics/logo/a.png')}}" alt="logo" />

    <header class="header2">
      <img class="bar2" src="{{asset('graphics/logo/bar2.png')}}" alt="bar" />
      <h1>POINTS TABLE</h1>
    </header>

    <div class="table-responsive" style="overflow-x: auto;">
      <table class="table clubtable">
        <tr>
          <th>S.N</th>
          <th>Name</th>
          <th>Leo CLub Name</th>
          <th>Club Post</th>
          <th>Points Gained</th>
        </tr>

        @foreach ($Users as $User)
          <tr>
            <td>{{ $User->id }}</td>
            <td>{{ $User->name}}</td>
            <td>{{ $User->club_name}}</td>
            <td>{{ $User->club_post}}</td>
            <td>{{ $User->points}}</td>
          </tr>
        @endforeach

      </table>
    </div>
@endsection