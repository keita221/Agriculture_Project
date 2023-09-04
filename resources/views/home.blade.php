@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="">
          <div class="card  p-4">
          <h2 class="pull-left ">Listes des differents Utilisateur</h2>

            <table class="table table-hover bg-primary">
                    <tr>
                        <th>Num</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Profile</th>
                        <th>Action</th>
                    </tr>
                    @foreach($user as $users)
                    <tr>
                        <td>{{$users->id}}</td>
                        <td>{{$users->name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->profile}}</td>
                        <td>
                            <a href="{{route('user.show',$users->id)}}" class="btn btn-info">Details</a>
                            <a href="{{route('user.destroy',$users->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
            </table>
          </div>
       </div>
    </div>
   </div>
  </div>
</div>
@endsection
