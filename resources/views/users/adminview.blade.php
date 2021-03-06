@extends('layouts.app')
@section('title', 'Users')

@section('content')
<div class="container">
<div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center" style="color:gold;">Users</h3>
            </div>
        <div class="wel clearfix">
            <hr>
             @if(Auth::guard('admins')->check())
            <a href="/cadmin/create" class="btn btn-success float-left" style="color:white;">Register Admins</a>
            @endif
            @if(Auth::guard('cadmin')->check())
            <a href="/user/create" class="btn btn-success float-left" style="color:white;">Register User</a>
            @endif
        </div>
        <hr>
            <table class="table text-white">
                <thead>
                         <th colspan="6" class="text-center">Users</th>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID No" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Email" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Club Name" disabled></th>
                        <th colspan="2"><input type="text" class="form-control text-center" placeholder="Action" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($Users)> 0)
                    @foreach($Users as $User)

                    <tr>
                        <td class="text-center">{{$User->id}}</td>
                        <td>{{$User->name}}</td>
                        <td>{{$User->email}}</td>
                        <td>{{$User->club_name}}</td>
                        <td><a href="/user/{{$User->id}}">View Details</a></td>
                        <td>
                        {!!Form::open(['action' => ['UserController@destroy', $User->id], 'method' => 'POST'])!!}
                        {{Form::hidden('_method', 'DELETE' )}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger '])}}
                        {!!Form::close()!!}</td>
                    </tr>
                    @endforeach
                        <div class="text-center"> {{$Users->links()}}</div>
                    @else
                    <tr>
                        <td>User Data Empty</td>
                        <td>User Data Empty</td>
                        <td>User Data Empty</td>
                        <td>User Data Empty</td>
                        <td colspan="2">User Data Empty</td>
                    </tr>
                    @endif
                </tbody>
            </table>

            {{-- Admin Table --}}
            <table class="table text-white">
                <thead>
                         <th colspan="6" class="text-center">Admins</th>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID No" disabled></th>
                        <th><input type="text" class="form-control" placeholder="User Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Club Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Created At" disabled></th>
                        <th colspan="2"><input type="text" class="form-control text-center" placeholder="Action" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($Cadmins)> 0)
                    @foreach($Cadmins as $Cadmin)

                    <tr>
                        <td class="text-center">{{$Cadmin->id}}</td>
                        <td>{{$Cadmin->username}}</td>
                        <td>{{$Cadmin->club_name}}</td>
                        <td>{{$Cadmin->created_at}}</td>
                        <td><a href="/cadmin/{{$Cadmin->id}}">View Details</a></td>
                        <td class="text-center">
                        {!!Form::open(['action' => ['CadminController@destroy', $Cadmin->id], 'method' => 'POST'])!!}
                        {{Form::hidden('_method', 'DELETE' )}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger '])}}
                        {!!Form::close()!!}</td>
                    </tr>
                    @endforeach
                        <div class="text-center"> {{$Users->links()}}</div>
                    @else
                    <tr>
                        <td>Admin Data Empty</td>
                        <td>Admin Data Empty</td>
                        <td>Admin Data Empty</td>
                        <td>Admin Data Empty</td>
                        <td colspan="2">Admin Data Empty</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection