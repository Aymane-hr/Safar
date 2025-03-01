@extends('layouts.app') 

@section('title', 'Liste des auto_cars') 

@section('content')
<div class="container">
    <h2 class="text-center"> Les auto_cars</h2>
    <a href="{{ route('Autocars.create') }}" class="btn btn-primary mb-3">Ajouter un auto_car</a>

<table class="table table-bordered">
<thead>

    <tr>
    <th>ID</th>
    <th>Nombre de siege</th>
    <th>Image</th> 
    <th>Matricule</th>
    <th>Société</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
@foreach($autocars as $autocar)
<tr>
    <td>{{$autocar->id}} </td>
    <td>{{$autocar->nbr_siege}} </td>
    <td>{{$autocar->image}} </td>
    <td>{{$autocar->matricule}} </td>
    <td>{{$autocar->societe->societe}} </td>
   
   

<td> 
    <a href="{{   route('Autocars.edit' , $autocar->id)}} "  class="btn btn-warning">Modifier</a>

    <form  action="{{ route('Autocars.destroy',$autocar->id)}}"  method="Post" class=" btn btn-danger">
        @csrf @method('DELETE')
        <button type="submit">Supp</button>
    </form>
</td>

</tr>

@endforeach
</tbody>

</table>
</div>
@endsection