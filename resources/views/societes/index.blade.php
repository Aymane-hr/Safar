@extends('layouts.app') <!-- Extend the layout -->

@section('title', 'Liste des societes') <!-- Define the title section -->

@section('content') <!-- Define the content section -->
    <div class="container mt-4">
        {{-- @include('layouts.Components.Flachbag') --}}
        <h1 class="text-center mb-4">Liste des societes</h1>

        {{-- Add Article Button --}}
        <div class="mb-3">
            <a href="{{ route('societes.create') }}" class="btn btn-primary">Add Societe</a>
        </div>

        {{-- Table --}}
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>raison_social</th>
                        <th>adresse</th>
                        <th>ville</th>
                        <th>tel</th>
                        <th>nom_contact</th>
                        <th>email</th>
                        <th>ice</th>
                        <th>logo</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($societes as $societe)
                        <tr>
                            <td>{{$societe->autoCars->matricule}}</td>

                            <td>{{ $societe->id }}</td>
                            <td>{{ $societe->raison_social }}</td>
                            <td>{{ $societe->adresse }}</td>
                            <td>{{ $societe->ville }}</td>
                            <td>{{ $article->tel }}</td>
                            <td>{{ $article->nom_contact }}</td>
                            <td>{{ $article->email }}</td>
                            <td>{{ $article->logo }}</td>

                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('societes.edit', $societe->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('societes.destroy', $societe->id) }}" method="POST" onsubmit="return confirm('Etes-vous s��r de vouloir supprimer cet societe?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                    <a href="{{ route('societes.show', $societe->id) }}" class="btn btn-info btn-sm">Show</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
