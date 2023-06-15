<!-- resources/views/produit/edit.blade.php -->
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
        <h1>E-commerce</h1>
        <form 
        {{-- action="{{ route('produit.update', $produit->id) }}"  --}}
        method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="designation">Désignation</label>
                <input type="text" class="form-control" id="designation" name="designation" value="{{ $produit->designation }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $produit->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="number" class="form-control" id="prix" name="prix" value="{{ $produit->prix }}" required>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $produit->image }}" required>
                <img src="{{ $produit->image }}" alt="Image du produit" class="img-fluid product-image" width="100" height="100">
            </div>

            <div class="form-group">
                <label for="tva">TVA</label>
                <input type="number" class="form-control" id="tva" name="tva" value="{{ $produit->tva }}" required>
            </div>

            <div class="form-group">
                <label for="rating">Évaluation</label>
                <input type="number" class="form-control" id="rating" name="rating" value="{{ $produit->rating }}" required>
            </div>

            <!-- Ajoutez ici les autres champs du formulaire -->

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</body>
</html>
