
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Societe</h1>
    <form action="{{ route('societes.store') }}" method="POST" >
        @csrf
        <div class="form-group">
            <label for="raison_social">Raison Social</label>
            <input type="text" name="raison_social" id="raison_social" class="form-control" >
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" id="adresse" class="form-control" >
        </div>
        <div class="form-group">
            <label for="ville">Ville</label>
            <input type="text" name="ville" id="ville" class="form-control" >
        </div>
        <div class="form-group">
            <label for="tel">Tel</label>
            <input type="text" name="tel" id="tel" class="form-control" >
        </div>
        <div class="form-group">
            <label for="nom_contact">Nom Contact</label>
            <input type="text" name="nom_contact" id="nom_contact" class="form-control" >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" >
        </div>
        <div class="form-group">
            <label for="ice">ICE</label>
            <input type="text" name="ice" id="ice" class="form-control" >
        </div>
        <div class="form-group">
            <label for="logo">Logo</label>
            <input type="file" name="logo" id="logo" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
