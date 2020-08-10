@extends('layouts.app')
@section('title','Gallery')
 
@section('content')

<hr class="gline"><h1 style="text-align: center;">LEO CLUB GALLERY</h1><hr class="gline">

<!--Upload  Images -->
@if(Auth::guard('admins')->check() || Auth::guard('cadmin')->check())
    <br><div class="container imgInsert">
        <h3 style="text-align: center;padding-bottom: 2%;">Upload Image <br>[Note: Only admin can see this]</h3>
        {!! Form::open(['action' => 'GalleryController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
            <div class="form-group imgInfo">
                {{Form::label('title','[Choose Photo]')}}<br>
                {{Form::File('image_upload',['class' => ''])}}
            </div> 
            @error('image_upload')
                <div class="alert alert-danger col-md-5">
                    {{$message}}
                </div>
            @enderror
            <div class="form-group imgInfo">
                {{Form::label( 'title' , 'Caption' )}}
                {{Form::text('caption','',['class' => 'form-control col-md-5 p', 'placeholder' => 'Details of Photo'])}}
            </div>
            @error('caption')
                <div class="alert alert-danger col-md-5">
                    {{$message}}
                </div>
            @enderror
            {{Form::submit('Upload Photo', ['class' => 'imgInfo btn btn-success'])}}
        {!! Form::close() !!}
    </div>
@endif

<!--Display Images -->
<div class="row" style="padding:2%">
    @if(count($pics)>0)
        @foreach($pics as $pic)
            <div class="col-md-3 col-6" >
                <div class="thumbnail imgBody">
                    <div class="imgDiv">
                        <img class="rounded imgMain" src="/storage/gallery/{{$pic->image_upload}}" alt="Lights">
                    </div>
                    <div class="caption imgCaption">
                        <p class="text-center">{{$pic->caption}}<br>Posted By {{$pic->uploaded_by}}</p> 
                        @if(Auth::guard('admins')->check())

                            {!!Form::open(['action' => ['GalleryController@destroy', $pic->id], 'method' => 'POST'])!!}
                                {{Form::hidden('_method', 'DELETE' )}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger delBut'])}}
                            {!!Form::close()!!}
                        @endif
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