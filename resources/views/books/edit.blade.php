@extends('layout')

@section('content')
    <h1>Modifier le livre</h1>
    <form method="POST" action="{{ route('books.update', $book->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Auteur</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}">
        </div>
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $book->isbn }}">
        </div>
        <div class="mb-3">
            <label for="publisher" class="form-label">Éditeur</label>
            <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $book->publisher }}">
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Année</label>
            <input type="text" class="form-control" id="year" name="year" value="{{ $book->year }}">
        </div>
        <div class="mb-3">
            <label for="copies" class="form-label">Copies</label>
            <input type="text" class="form-control" id="copies" name="copies" value="{{ $book->copies }}">
        </div>
        <button type="submit" class="btn btn-primary">Sauvegarder les modifications</button>
    </form>
@endsection
