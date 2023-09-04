<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  <title>Document</title>
</head>
<body>
@extends('layouts.dart')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="">
          <div class="card  p-4">
            <div class="flex">
               <div><h2 class="pull-left ">Listes des differents cultures de nos cultivateurs</h2></div>
               <div><a href="{{route('culture.affiche')}}" class="btn btn-primary">Ajouter culture</a></div>
            </div>
              <table class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>prix</th>
                        <th>Quantite</th>
                        <th>User ID</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($cultures as $culture)
                    <tr>
                        <td>{{$culture->id}}</td>
                        <td>{{$culture->nom}}</td>
                        <td>
                          <img src="{{ asset($culture->image) }}" alt="" srcset="">
                        </td>
                        <td>{{$culture->description}}</td>
                        <td>{{$culture->prix}}</td>
                        <td>{{$culture->quantite}}</td>
                        <td>{{$culture->user_id}}</td>
                        <td>
                            <a href="{{route('detaille-culture',$culture->id)}}" class="btn btn-info">Details</a>
                            <a href="{{route('culture.edit',$culture->id)}}" class="btn btn-primary">Modifier</a>
                            <a href="{{route('culture.destroy',$culture->id)}}" class="btn btn-danger">Delete</a>
                            
                        </td>
                    </tr>
                    @endforeach
              <table>
          </div>
       </div>
    </div>
   </div>
  </div>
</div>
@endsection

</body>
</html>