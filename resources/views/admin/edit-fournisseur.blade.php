<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit fournisseur</title>
    <link href="{{asset('favicon.jpeg')}}" rel="icon">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h1>Fournisseur infos</h1>
        <form action="{{ route('fournisseur.update', ['fournisseur' => $fournisseur->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $fournisseur->nom }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $fournisseur->email }}" required />
            </div>
            <div class="form-group">
                <label for="tel">tel</label>
                <input type="text" class="form-control" id="tel" name="tel" value="{{ $fournisseur->tel }}" required>
            </div>
            <div class="form-group">
                <label for="adresse">adresse</label>
                <textarea class="form-control" id="adresse" name="adresse" rows="3" required>{{ $fournisseur->adresse }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</body>
</html>
