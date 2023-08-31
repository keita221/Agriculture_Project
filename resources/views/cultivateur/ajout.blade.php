<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="card p-4">
      <h2>Ajouter une Culture</h2>
        <form action="{{route('culture.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Nom</label>
                <input type="text" name='nom' placeholder='nom culture' class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Image</label>
                <input type="file" name='img' class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <input type="text" name='des' placeholder='description culture' class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Prix</label>
                <input type="number" name='prix' placeholder='prix culture' class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Quantite</label>
                <input type="number" name='nbr' placeholder='quantite culture' class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">User ID</label>
                <input type="number" name='id' placeholder='id user' class="form-control">
            </div>
            <div>
            <button type="submit" class="btn btn-primary">valider</button>
            </div>
        </form>
    </div>
    </div>
</body>
</html>