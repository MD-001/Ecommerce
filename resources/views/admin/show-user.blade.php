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
            <h1 class="mt-4">users</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Liste des users</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <ul class="d-flex justify-content-between align-items-center" style="list-style-type: none">
                        <li>
                            <i class="fas fa-table me-1"></i>users Disponible
                        </li>
                        <li>
                            <a class="btn btn-success" href="{{ route('categorie.create') }}">Ajouter Categorie</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <table class="w-100" id="datatablesSimple">
                        <thead>
                            <tr>
                                <th class="text-center">Date commande</th>
                                <th class="text-center">description</th>
                                <th class="text-center">total</th>
                                <th class="text-center">Etat du commande</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user->commandes as $user)
                                <tr>
                                    <td>{{ $user->date }}</td>
                                    <td>{{ $user->description }}</td>
                                    <td>{{ $user->total }}</td>
                                    <td>{{ $user->etat_commande->libelle }}</td>
                                    {{-- <td>{{ $user->prix }}</td>
                                    <td>{{ $user->qte_stock }}</td>
                                    <td>{{ $user->tva }}</td>
                                    <td>{{ $user->rating }}</td> --}}
                                    <td>
                                        <a
                                        href="{{ route('user.show', $user) }}" 
                                         class="btn btn-info">show</a>
                                        <a 
                                        href="{{ route('user.edit', $user) }}" 
                                         class="btn btn-warning">edit</a>
                                        <div class="d-inline-block">
                                        <form method="POST" action="{{ route('user.destroy', $user) }}">
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
        