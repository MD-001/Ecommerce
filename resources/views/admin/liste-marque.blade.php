@extends('layouts.admin')
@section('content')
@section('head-table', 'Marque')
@section('title', 'Liste des marques')
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>image</th>
                                            <th>nom</th>
                                            <th>libelle</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($marques as $marque)
                                            <tr>
                                                <td>
                                                    <div class="justify-content-center d-flex">
                                                        <img src="{{ asset($marque->image) }}" width="120px" height="100px" alt="image" />
                                                    </div>
                                                </td>
                                                <td>{{ $marque->nom }}</td>
                                                <td>{{ $marque->libelle }}</td>
                                                <td>
                                                    <a 
                                                    href="{{ route('marque.edit', $marque) }}" 
                                                     class="btn btn-warning">edit</a>
                                                    <div class="d-inline-block">
                                                    <form method="POST" action="{{ route('marque.destroy', $marque) }}">
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