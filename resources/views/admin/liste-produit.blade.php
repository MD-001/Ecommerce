@extends('layouts.admin')
@section('content')
@section('head-table', 'Produit')
@section('title', 'Liste des produits')
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>image</th>
                                            <th>designation</th>
                                            <th>prix</th>
                                            <th>qantité de stock</th>
                                            <th>TVA</th>
                                            <th>rating</th>
                                            <th>Actions</th>
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
@endsection                   