@extends('layout')

@section('content')
    <h1>Bibliothèque</h1>
   
    <table class="table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>ISBN</th>
                <th>Éditeur</th>
                <th>Année</th>
                <th>Copies</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->publisher }}</td>
                <td>{{ $book->year }}</td>
                <td>{{ $book->copies }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('books.show' , $book->id) }}">Montrer</a>
                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-primary">Modifier</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline-block">
                    
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Ajouter un livre</a>
@endsection
