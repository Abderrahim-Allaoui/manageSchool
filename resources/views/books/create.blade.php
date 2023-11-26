@extends('layout')

@section('content')
    <h1>Ajouter un nouveau livre</h1>
    <form method="POST" action="{{ route('books.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Auteur</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn">
        </div>
        <div class="mb-3">
            <label for="publisher" class="form-label">Éditeur</label>
            <input type="text" class="form-control" id="publisher" name="publisher">
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Année</label>
            <input type="text" class="form-control" id="year" name="year">
        </div>
        <div class="mb-3">
            <label for="copies" class="form-label">Copies</label>
            <input type="text" class="form-control" id="copies" name="copies">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
