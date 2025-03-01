<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="{{ route('societes.update', $societe->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="cef">Raison_social</label>
    <input type="text" name="raison_social" id="raison_social" class="form-control" value="{{ $societe->raison_social }}" required>

    <label for="adresse">adresse</label>
    <input type="text" name="adresse" id="adresse" class="form-control" value="{{ $societe->adresse }}" required>

    <label for="ville">Ville</label>
    <input type="text" name="ville" id="ville" class="form-control" value="{{ $societe->ville }}" required>

    <label for="tel">tel</label>
    <input type="text" name="tel" id="tel" class="form-control" value="{{ $societe->tel }}" required>

    <label for="nom_contact">nom_contact</label>
    <input type="text" name="nom_contact" id="nom_contact" class="form-control" value="{{ $societe->nom_contact }}" required>

    <label for="email">email</label>
    <input type="email" name="email" id="email" class="form-control" value="{{ $societe->email }}" required>

    <label for="ice">ice</label>
    <input type="text" name="ice" id="ice" class="form-control" value="{{ $societe->ice }}" required>

    <label for="logo">logo</label>
    <input type="file" name="logo" id="logo" class="form-control" value="{{ $societe->logo }}" required>

    <center>
        <button type="submit" class="btn btn-success mt-3 w-50">Mettre à jour</button>
    </center>
</form>
</body>
</html>

