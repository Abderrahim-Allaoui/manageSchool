@extends('layout')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $book->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $book->author }}</h6>
            <p class="card-text">ISBN: {{ $book->isbn }}</p>
            <p class="card-text">Publisher: {{ $book->publisher }}</p>
            <p class="card-text">Year: {{ $book->year }}</p>
            <p class="card-text">Copies available: {{ $book->copies }}</p>
            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Modifier</a>
            <form method="POST" action="{{ route('books.destroy', $book->id) }}" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
    </div>
@endsection
