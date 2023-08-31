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
                          <img src="{{$culture->image}}" alt="" srcset="">
                        </td>
                        <td>{{$culture->description}}</td>
                        <td>{{$culture->prix}}</td>
                        <td>{{$culture->quantite}}</td>
                        <td>{{$culture->user_id}}</td>
                        <td>
                            <a href="#" class="btn btn-info">Details</a>
                            <a href="#" class="btn btn-danger">Delete</a>
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
