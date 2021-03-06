@extends('layouts.app')
@section('title','Admin Profile')
@section('content')

    </style>

    <h1 style="color: #FBFF3C;" class="text-center">{{$User->club_name}}</h1>
        <div class="container evtDiv">
                <div class="container" style="color:white;">
            <div class="well" >
                <br>
                <h3 class="text-center">{{$User->name}}</h3>
            </div>
                <div class="row">
                <div class="col-md-4 col-sm-4 text-white">
                    <h4>
                        ID : {{$User->id}} <br>
                        Club Name : {{$User->club_name}}<br>
                        Registed At : {{$User->created_at}}<br>
                        Modified At : {{$User->updated_at}}
                    </h4>
            </div>
                    <div class="col-md-8 col-sm-4">
                        <img class="ml-4 rounded-circle" src="/storage/profile/{{$User->profile_image}}" style="height: 70%; width: 30%;">
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
                        <h3>{{$spa->Activity_Name}} <br> {{$spa->Leo_Club_Name}}</h3>
                          {!!Form::open(['action' => ['SpaController@destroy', $spa->id], 'method' => 'POST'])!!}
                        {{Form::hidden('_method', 'DELETE' )}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger '])}}
                        {!!Form::close()!!}
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
                            {!!Form::open(['action' => ['NewsController@destroy', $new->id], 'method' => 'POST'])!!}
                                {{Form::hidden('_method', 'DELETE' )}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
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
                                {!!Form::open(['action' => ['GalleryController@destroy', $gallery->id], 'method' => 'POST'])!!}
                                {{Form::hidden('_method', 'DELETE' )}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger delBut'])}}
                            {!!Form::close()!!}
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
    </div>
    <div class="container evtDiv">
            <h3>Users by You</h3>  
            @if(count($Users)> 0)
        <table class="table text-white">
                <thead>
                         <th colspan="6" class="text-center">Users</th>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID No" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Email" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Club Name" disabled></th>
                        <th><input type="text" class="form-control text-center" placeholder="Action" disabled></th>
                    </tr>
                </thead>
                <tbody>
                  
                    @foreach($Users as $Users)

                    <tr>
                        <td>{{$Users->id}}</td>
                        <td>{{$Users->name}}</td>
                        <td>{{$Users->email}}</td>
                        <td>{{$Users->club_name}}</td>
                        <td class="text-center">
                        {!!Form::open(['action' => ['UserController@destroy', $Users->id], 'method' => 'POST'])!!}
                        {{Form::hidden('_method', 'DELETE' )}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger '])}}
                        {!!Form::close()!!}</td>
                    </tr>
                    @endforeach
                     </tbody>
            </table>
                    @else
                    <div class="row" style="padding:2%">
                    You Havent Created any User
                </div>
                    @endif
               
    </div>
@endsection