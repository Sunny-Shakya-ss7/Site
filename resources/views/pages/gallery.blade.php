@extends('layouts.app')
@section('title','Gallery')
 
@section('content')

<!--Upload  Images -->
@if(Auth::guard('admins')->check())
<div class="container">
	<h3>Upload Image [Note: Only admin can see this]</h3>
{!! Form::open(['action' => 'GalleryController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
 <div class="form-group">
                {{Form::label('title','[Choose Photo]')}}<br>
                {{Form::File('image_upload',['class' => ''])}}
            </div> 
            @error('image_upload')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
<div class="form-group">
                    {{Form::label( 'title' , 'Caption' )}}
                    {{Form::text('caption','',['class' => 'form-control col-md-5', 'placeholder' => 'Deatails of Photo'])}}
            </div>
            @error('caption')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
{{Form::submit('Upload Photo', ['class' => 'btn btn-success'])}}
{!! Form::close() !!}
</div>
@endif
<!--Display Images -->
		<div class="row" style="padding:2%">
			@if(count($pics)>0)
			@foreach($pics as $pic)
  <div class="col-md-4" >
    <div class="thumbnail">
        <img  class="rounded" src="/storage/gallery/{{$pic->image_upload}}" alt="Lights" style="width:100%">
        <div class="caption">
          <p class="text-center">{{$pic->caption}}</p>
    @if(Auth::guard('admins')->check())
        {!!Form::open(['action' => ['GalleryController@destroy', $pic->id], 'method' => 'POST'])!!}
		{{Form::hidden('_method', 'DELETE' )}}
		{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
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