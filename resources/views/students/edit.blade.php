@extends('layout')
@section('content')

<h2 style="color: blue;">Modifier l'élève</h2>
<form action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data" method="POST">
@csrf
@method('PUT')
<div class="form-group">
    <label for="name">Nom et prénom:</label>
    <input class="form-control" name="name" type="text" value="{{ $student->name }}" />
</div>
<div class="form-group">
    <label for="email">Email:</label> 
    <input class="form-control" name="email" type="text" value="{{ $student->email }}" />
</div>
<div class="form-group">
    <label for="phone">Téléphone:</label> 
    <input class="form-control" name="phone" type="text" value="{{ $student->phone }}" />
</div>
<div class="form-group">
    <label for="section">Section :</label>
    <select style="width: 100%;" name="section">
        <option value="Math" {{ $student->section == 'Math' ? 'selected' : '' }}>Math</option>
        <option value="Svt" {{ $student->section == 'Svt' ? 'selected' : '' }}>SVT</option>
        <option value="Physique" {{ $student->section == 'Physique' ? 'selected' : '' }}>Physique</option>
        <option value="Informatique" {{ $student->section == 'Informatique' ? 'selected' : '' }}>Informatique</option>
    </select>
</div>
<div class="form-group">
    <label for="image">Image :</label> 
    <input class="form-control" name="image" type="file" />
</div>
<button href="#" class="btn btn-primary"  type="submit">Mettre à jour l'élève</button>
</form>
@endsection