@extends('layout')

@section('content')
    <div class="container">
        <h1>Détails de l'enseignant</h1>
        <div class="form-group">
            <label for="name">Nom :</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $teacher->name }}" disabled>
        </div>
        <div class="form-group">
            <label for="email">Adresse e-mail :</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $teacher->email }}" disabled>
        </div>
        <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-primary">Modifier</a>
    </div>
@endsection
