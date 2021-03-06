@extends('layouts.app')
 @section('title','Leo Clubs')
@section('content')

    <style>
      .vertical1{
          height: 323vh !important;
        }
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
      
      .vertical1{
          height: 333vh !important;
        }
      }
    </style>

    <img class="vertical1 v1" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 5rem;" />
    <img class="vertical1 v2" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 6.5rem;" />
    <img class="vertical1 v3" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 8rem;" />
    <img class="vertical1 v4" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 9.5rem;"/>
    <img class="image1" src="{{asset('graphics/logo/a.png')}}" alt="logo" />

    <header class="header1">
      <img class="bar" src="{{asset('graphics/png/bar.png')}}" alt="bar" />
      <h1>LEO CLUBS</h1>
    </header>

    <div class="table-responsive" style="overflow-x: auto;">
      <table class="table clubtable">
        <tr>
          <th>S.N</th>
          <th>Leo Club ID</th>
          <th>Leo CLub Name</th>
          <th>Sponsor Lions Club Name</th>
          <th>Club ID</th>
        </tr>

        @foreach ($clubs as $clubs)
          <tr>
            <td>{{ $clubs->id }}</td>
            <td>{{ $clubs->Leo_Club_ID }}</td>
            <td>{{ $clubs->Leo_Club_Name }}</td>
            <td>{{ $clubs->Sponsor_Lions_Club_Name }}</td>
            <td>{{ $clubs->Club_ID }}</td>
          </tr>
        @endforeach

      </table>
    </div>
@endsection