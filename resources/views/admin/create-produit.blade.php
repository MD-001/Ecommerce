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
        action="{{ route('produit.store') }}" 
        method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="designation">Désignation</label>
                <input type="text" class="form-control" id="designation" name="designation"  required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="number" class="form-control" id="prix" name="prix" required>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image" required>
                {{-- <img src="{{ $produit->image }}" alt="Image du produit" class="img-fluid product-image" width="100" height="100"> --}}
            </div>

            <div class="form-group">
                <label for="tva">TVA</label>
                <input type="number" class="form-control" id="tva" name="tva" required>
            </div>
            <div class="form-group">
                <label for="qte_stock">Qte stock</label>
                <input type="number" class="form-control" id="qte_stock" name="qte_stock" required>
            </div>
            <div class="form-group">
                <label for="rating">Évaluation</label>
                <input type="number" class="form-control" id="rating" name="rating" required>
            </div>
            <div class="form-group">
                <label for="fournisseur_id">Fournisseur</label>
            <select required name="fournisseur_id" id="fournisseur_id" class="form-control">
                <option>Selection un fournisseur svp: </option>
                @foreach($fournisseurs as $fournisseur)
                    <option value="{{ $fournisseur->id }}">{{ $fournisseur->nom }}</option>
                @endforeach
            </select>
            </div>
            <div class="form-group">
                <label for="marque_id">Marque</label>
                <select required name="marque_id" id="marque_id" class="form-control">
                    <option>Selection une marque svp: </option>
                    @foreach($marques as $marque)
                        <option value="{{ $marque->id }}">{{ $marque->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="categorie_id">Categorie</label>
                <select required name="categorie_id" id="categorie_id" class="form-control">
                    <option>Selection une categorie svp: </option>
                    @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="propriete_id">Propriete</label>
                <select required name="propriete_id" id="propriete_id" class="form-control">
                    <option>Selection une propriete svp: </option>
                    @foreach($proprietes as $propriete)
                        <option value="{{ $propriete->id }}">{{ $propriete->libelle }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Ajoutez ici les autres champs du formulaire -->

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</body>
</html>
