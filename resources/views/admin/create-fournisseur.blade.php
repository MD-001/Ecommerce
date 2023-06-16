<!-- resources/views/fournisseur/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoutiqueVirtuelle</title>
    <link href="{{asset('favicon.jpeg')}}" rel="icon">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h1>Fournisseur infos</h1>
        <form 
        action="{{ route('fournisseur.store') }}" 
        method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom"  required>
            </div>

            <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control" id="email" name="email" required />
            </div>

            <div class="form-group">
                <label for="tel">tel</label>
                <input type="text" class="form-control" id="tel" name="tel" required>
            </div>

            <div class="form-group">
                <label for="adresse">adresse</label>
                <textarea class="form-control" id="adresse" name="adresse" rows="3" required></textarea>
                {{-- <img src="{{ $fournisseur->image }}" alt="Image du fournisseur" class="img-fluid product-image" width="100" height="100"> --}}
            </div>
            <!-- Ajoutez ici les autres champs du formulaire -->

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</body>
</html>
