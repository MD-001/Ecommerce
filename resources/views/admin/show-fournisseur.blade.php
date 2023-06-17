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
        <div class="container-fluid px-4">
            <h1 class="mt-4">Produits</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Liste des produits</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <ul class="d-flex justify-content-between align-items-center" style="list-style-type: none">
                        <li>
                            <i class="fas fa-table me-1"></i>Produits Disponible
                        </li>
                        <li>
                            <a class="btn btn-success" href="{{ route('fournisseur.create') }}">Ajouter fournisseur</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <table class="w-100" id="datatablesSimple">
                        <thead>
                            <tr>
                                <th class="text-center">image</th>
                                <th class="text-center">designation</th>
                                <th class="text-center">prix</th>
                                <th class="text-center">qantité de stock</th>
                                <th class="text-center">TVA</th>
                                <th class="text-center">rating</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produits as $produit)
                                <tr>
                                    <td>
                                        <div class="justify-content-center d-flex">
                                            <img src="{{ asset($produit->image) }}" width="120px" height="100px" alt="image" />
                                        </div>
                                    </td>
                                    <td>{{ $produit->designation }}</td>
                                    <td>{{ $produit->prix }}</td>
                                    <td>{{ $produit->qte_stock }}</td>
                                    <td>{{ $produit->tva }}</td>
                                    <td>{{ $produit->rating }}</td>
                                    <td>
                                        <a
                                        href="{{ route('produit.show', $produit) }}" 
                                         class="btn btn-info">show</a>
                                        <a 
                                        href="{{ route('produit.edit', $produit) }}" 
                                         class="btn btn-warning">edit</a>
                                        <div class="d-inline-block">
                                        <form method="POST" action="{{ route('produit.destroy', $produit) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </form></div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>
        