<!-- resources/views/produit/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit produit</title>
    <link href="{{asset('favicon.jpeg')}}" rel="icon">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h1>Edit produit</h1>
        <form action="{{ route('produit.update', $produit) }}" 
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="designation">Désignation</label>
                <input type="text" class="form-control" id="designation" name="designation" value="{{ $produit->designation }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $produit->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="number" class="form-control" id="prix" name="prix" value="{{ $produit->prix }}">
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image" value="{{ $produit->image }}">
                <img src="{{ $produit->image }}" alt="Image du produit" class="img-fluid product-image" width="100" height="100">
            </div>

            <div class="form-group">
                <label for="tva">TVA</label>
                <input type="number" class="form-control" id="tva" name="tva" value="{{ $produit->tva }}">
            </div>

            <div class="form-group">
                <label for="rating">Évaluation</label>
                <input type="number" class="form-control" id="rating" name="rating" value="{{ $produit->rating }}">
            </div>
            <div class="form-group">
                <label for="fournisseur_id">Fournisseur</label>
                <select required name="fournisseur_id" id="fournisseur_id" class="form-control">
                    @foreach($fournisseurs as $fournisseur)
                        <option value="{{ $fournisseur->id }}" {{ $produit->fournisseur_id == $fournisseur->id ? 'selected' : '' }}>{{ $fournisseur->nom }}</option>
                    @endforeach
                </select>                
            </div>
            <div class="form-group">
                <label for="marque_id">Marque</label>
                <select required name="marque_id" id="marque_id" class="form-control">
                    @foreach($marques as $marque)
                        <option value="{{ $marque->id }}" {{ $produit->marque_id == $marque->id ? 'selected' : '' }}>{{ $marque->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="categorie_id">Categorie</label>
                <select required name="categorie_id" id="categorie_id" class="form-control">
                    @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}" {{ $produit->categorie_id == $categorie->id ? 'selected' : '' }}>{{ $categorie->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="propriete_id">Propriete</label>
                <select required name="propriete_id" id="propriete_id" class="form-control">
                    <option>{{ $produit->propriete->libelle }}</option>
                    @foreach($proprietes as $propriete)
                        <option value="{{ $propriete->id }}" {{ $produit->propriete_id == $propriete->id ? 'selected' : '' }}>{{ $propriete->libelle }}</option>
                    @endforeach
                </select>
            </div>
            <!-- Ajoutez ici les autres champs du formulaire -->

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</body>
</html>
