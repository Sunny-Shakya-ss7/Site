@extends('layouts.app')
 @section('title','Mails')
@section('content')
		@if(count($mails)>0)
		
		<div class="container">
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Designation</th>
        <th>Comment</th>
        <th>Time</th>
      </tr>
    </thead>
    <tbody>
    	@foreach( $mails as $mail)
      <tr>
        <td>{{$mail->name}}</td>
        <td>{{$mail->email}}</td>
        <td>{{$mail->designation}}</td>
        <td>{{$mail->comment}}</td>
        <td>{{$mail->create_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@else
<div class="container">
No data
</div>
@endif
@endsection