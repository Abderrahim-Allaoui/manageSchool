@extends('layout') 
@section('content') 
<div class="table-wrapper">
<h1>Etudiant</h1>
 <table class="fl-table"> 
 <thead style="height: 5px;">
     <tr> 
        <th> ID </th>
        <th>Nom et Prénom</th> 
        <th>Email</th>
        <th>Téléphone</th> 
        <th>Section</th>
        <th>Image</th> 
        <th>Montrer </th>
        <th>Mise à jour </th> 
        <th>Supprimer</th>
     </tr> 
     <tr>
       <td colspan="7"></td> 
     </tr>
 </thead> 
 <tbody>
 @foreach($students as $student) 
 <tr>
 <td>{{$student->id}}</td> 
 <td>{{$student->name}}</td>
 <td>{{$student->email}}</td> 
 <td>{{$student->phone}}</td>
 <td style="color:brown; font-weight: bold;">{{$student->section}}</td> 
 <td><img src="/image/{{ $student->image }}" width="64" height="64"></td>
 <td style="vertical-align:middle; "> 
   <a class="btn btn-info" href="{{ route('students.show' , $student->id) }}">Montrer</a> 
</td>

<td style="vertical-align:middle; "> 
<a class="btn btn-primary" href="{{ route('students.edit' , $student->id) }}">Modifier</a> 
</td>


<td style="vertical-align:middle; "> 
<form method="POST" action="{{ route('students.destroy', $student->id) }}" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Supprimer</button>
</form>
</td> 
</tr>
@endforeach 
</tbody>


</table>
<a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Ajouter un étudient </a>
<div style="width:650px;">
    {!! $students->links() !!}
</div>

</div>
 
@endsection
