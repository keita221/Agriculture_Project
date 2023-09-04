<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .item {
            background-color: white;
            padding: 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border: 2px solid blue;
            border-radius:8px;
        }
    </style>
</head>
<body>
    @extends('layouts.dart')
    @section('content')
       <div class="container">
          <div class="item w-50">
                    <div>
                       Image Produits 
                    </div>
                    <div>
                        <div class="form-group">
                            <strong>ID :</strong>
                             {{$detaille->id}}
                        </div>
                        <div class="form-group">
                            <strong>Nom :</strong>
                            {{$detaille->nom}}
                        </div>
                        <div class="form-group">
                            <strong>Description :</strong>
                            {{$detaille->description}}
                        </div>
                        <div class="form-group">
                            <strong>Prix :</strong>
                            {{$detaille->prix}}
                        </div>
                        <div class="form-group">
                            <strong>Quantites :</strong>
                            {{$detaille->quantite}}
                        </div>
                        <div class="form-group">
                            <strong>ID User :</strong>
                            {{$detaille->user_id}}
                        </div>
                    </div>
            </div>
            
       </div>
    @endsection
</body>
</html>