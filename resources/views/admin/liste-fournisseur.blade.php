@extends('layouts.admin')
@section('content')
@section('head-table', 'Fournisseur')
@section('title', 'Liste des fournisseurs')
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>nom</th>
                                            <th>email</th>
                                            <th>telephone</th>
                                            <th>adresse</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($fournisseurs as $fournisseur)
                                            <tr>
                                                <td>{{ $fournisseur->nom }}</td>
                                                <td>{{ $fournisseur->email }}</td>
                                                <td>{{ $fournisseur->tel }}</td>
                                                <td>{{ $fournisseur->adresse }}</td>
                                                <td>
                                                    <a
                                                    href="{{ route('fournisseur.show', $fournisseur) }}" 
                                                     class="btn btn-info">show</a>
                                                    <a 
                                                    href="{{ route('fournisseur.edit', $fournisseur) }}" 
                                                     class="btn btn-warning">edit</a>
                                                    <div class="d-inline-block">
                                                    <form method="POST" action="{{ route('fournisseur.destroy', $fournisseur) }}">
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