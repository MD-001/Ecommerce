@extends('layouts.admin')
@section('content')
@section('head-table', 'Categorie')
@section('title', 'Liste des categories')
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $estImpair = false; ?>
                                        @foreach ($categories as $categorie)
                                            <tr style="background-color: {{ $estImpair ? '#f2f2f2' : '#ffffff' }}">
                                                <td>{{ $categorie->nom }}</td>
                                                <td>
                                                    <div class="justify-content-center d-flex">
                                                        <img src="{{ asset($categorie->image) }}" width="120px" height="100px" alt="Image">
                                                    </div>
                                                </td>

                                                <td>
                                                    <a href="{{ route('categorie.show', $categorie->id) }}"  class="btn btn-info">Show</a>
                                                    <a href="{{ route('categorie.edit', $categorie->id) }}"  class="btn btn-warning">Edit</a>
                                                    <div class="d-inline-block">
                                                    <form method="POST" action="{{ route('categorie.destroy', $categorie) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                                    </form></div>
                                                </td>
                                            </tr>
                                            <?php $estImpair = !$estImpair; ?>
                                        @endforeach
                                    </tbody>
                                </table>
@endsection