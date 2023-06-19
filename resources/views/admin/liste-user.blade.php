@extends('layouts.admin')
@section('content')
@section('head-table', 'Client')
@section('title', 'Liste des client')
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>user name</th>
                                            <th>nom</th>
                                            <th>prenom</th>
                                            <th>Tel</th>
                                            <th>Adresse</th>
                                            <th>email</th>
                                            <th>ville</th>
                                            <th>role</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->nom }}</td>
                                                <td>{{ $user->prenom }}</td>
                                                <td>{{ $user->tel }}</td>
                                                <td>{{ $user->adresse }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->ville->nom }}</td>
                                                <td>{{ $user->roleID->role }}</td>
                                                <td>
                                                    <a
                                                    href="{{ route('user.show', $user) }}" 
                                                     class="btn btn-info">Détail</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
@endsection                   