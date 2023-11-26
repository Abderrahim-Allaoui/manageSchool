@extends('layout')
@section('content')
<h2 style="color: blue;">Ajouter un nouvel étudiant</h2>
 
 
<form action="{{ route('students.store') }}" enctype="multipart/form-data" method="POST">
@csrf
<div class="form-group">
    <label for="name">Nom et prénom:</label>
    <input class="form-control" name="name" type="text" />
</div>
 
<div class="form-group">
    <label for="email">Email:</label> 
    <input class="form-control" name="email" type="text" />
</div>
 
<div class="form-group">
    <label for="phone">Téléphone:</label> 
    <input class="form-control" name="phone" type="text" />
</div>
 
<div class="form-group">
    <label for="section">Section :</label>
    <select style="width: 100%;" name="section">
<!-- Les options -->
<option value="Math">Math</option>
<option value="Svt">SVT</option>
<option value="Physique">Physique</option>
<option value="Informatique">Informatique</option>
</select></div>
 
<div class="form-group">
    <label for="image">Image :</label> 
    <input class="form-control" name="image" type="file" />
</div>
<button href="#" class="btn btn-primary"  type="submit">Ajouter un étudiant</button>
 
</form>
@endsection