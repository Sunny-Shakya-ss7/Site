@extends('layouts.app')
@section('title','Admin Profile')
@section('content')

    <style>
        .vertical3 { 
            position: absolute;
            width: 9px;
            min-height: 100%;
        }

        @media (max-width: 500px) {
            .vertical3 {
                width: 5px;
                min-height: 100%;
            }
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
        }
    </style>

    <img class="vertical3 v1" src="{{asset('graphics/logo/line.png')}}" alt="line" style="left: 6rem;" />
    <img class="vertical3 v2" src="{{asset('graphics/logo/line.png')}}" alt="line" style="left: 7.5rem;" />
    <img class="vertical3 v3" src="{{asset('graphics/logo/line.png')}}" alt="line" style="left: 9rem;" />
    <img class="vertical3 v4" src="{{asset('graphics/logo/line.png')}}" alt="line" style="left: 10.5rem;"/>
    <img class="image" src="{{asset('graphics/logo/a.png')}}" alt="logo" />

    <h1 style="color: #FBFF3C;" class="text-center">Admin Pofile </h1>
        <div class="container evtDiv">
                <div class="container" style="color:white;">
            <div class="well" >
                <br>
                <h3 class="text-center">{{$User->name}}</h3>
            </div>
                <div class="row">
                <div class="col-md-4 col-sm-4 text-white">
                ID : {{$User->id}} <br>
                Name : {{$User->name}} <br>
                Email : {{$User->email}} <br>
                From Club Name : {{$User->club_name}}<br>
                Club Post : {{$User->club_name}}<br>
                Created At : {{$User->club_post}}<br>
                Updated At : {{$User->updated_at}}
            </div>
                    <div class="col-md-8 col-sm-4">
                        <img class="ml-4 rounded-circle" src="/storage/profile/{{$User->profile_image}}" style="height: 75%; width: 50%;">
                    </div>
                </div>
            </div>
        </div>
        <div class="container evtDiv">
            <h3>Your SPA Reports</h3>
        @if(count($spas)>0)
            @foreach($spas as $spa)
                <div class="well evtBody">
                    <div class="row evtCont">
                        <div class="col-md-4 col-sm-4 evtImg">
                            <img id="evtPic" src="/storage/images/{{$spa->Photos}}" alt="pic" style="height:100%; width: 100%;">
                        </div>
                        <div class="col-md-8 col-sm-4 evtInfo">
                        <h3>{{$spa->Leo_Club_Official_Email_Address}} <br> {{$spa->Leo_Club_Name}}</h3>
                        </div>
                    </div>
                </div><br>
            @endforeach
        @else
            <p>No Reports Found</p>
        @endif
    </div>
    <div class="container evtDiv">
            <h3>Your News Reports</h3>
        @if(count($news)>0)
            @foreach($news as $new)
                <div class="well evtBody">
                    <div class="row evtCont">
                        <div class="col-md-4 col-sm-4 evtImg">
                        <img id="evtPic" src="/storage/news/{{$new->cover_image}}" alt="pic" style="height:100%; width: 100%;">
                        </div>
                        <div class="col-md-8 col-sm-4 evtInfo">
                            <h3><a style="color: white" href="/news/{{$new->id}}">{{$new->title}}- {{$new->slug}}</a></h3>
                            <small><i class="far fa-calendar-alt"></i> {{$new->created_at}} by {{$new->club_name}}</small>
                        </div>
                    </div>
                </div><br>
            @endforeach
        @else
            <p>No News Found</p>
        @endif
    </div>

    <!--Display Images -->
    <div class="container evtDiv">
            <h3>Your Uploaded Picture</h3>
        <div class="row" style="padding:2%">
            @if(count($gallery)>0)
                @foreach($gallery as $gallery)
                    <div class="col-md-3 col-6" >
                        <div class="thumbnail imgBody">
                            <div class="imgDiv">
                                <img class="rounded imgMain" src="/storage/gallery/{{$gallery->image_upload}}" alt="Lights" style="height: 250px; width: 225px; margin-left: 0px;">
                            </div>
                            <div class="caption imgCaption">
                                <p class="text-center">{{$gallery->caption}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="row" style="padding:2%">
                    NO DATA FOUND
                </div>
            @endif
        </div>
@endsection