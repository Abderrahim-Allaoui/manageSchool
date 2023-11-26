<!-- resources/views/teachers/index.blade.php -->

@extends('layout')

@section('content')
    <div class="container">
        <h1>Liste des enseignants</h1>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th> ID </th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->id}}</td>
                    <td>{{ $teacher->nom }}</td>
                    <td>{{ $teacher->prenom }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>
                        <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-sm btn-info">Voir</a>
                        <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                        <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
 
 
        <a href="{{ route('teachers.create') }}" class="btn btn-primary mb-3">Ajouter un enseignant</a>
    </div>
@endsection
