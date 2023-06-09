@extends('adminlte::page')
@section('title')
Créér une nouvelle Etudient
@endsection
@section('content')
<div class="container">
    <h3 style="position:relative">Remplissez le formulaire</h3>
    <div class="card-body">
        <form action="{{url('home')}}" method="post">
            @csrf
            <label>id</label></br>
            <input type="text" name="idEtudient" id="idEtudient" class="form-control"/></br>
            <label>Nom</label></br>
            <input type="text" name="nom" id="nom" class="form-control"/></br>
            <label>Prénom</label></br>
            <input type="text" name="prenom" id="prenom" class="form-control"/></br>
            <label>Date de Naissance</label></br>
            <input type="date" name="dateNaissance" id="dateNaissance" class="form-control"/></br>
            <label>Téléphone</label></br>
            <input type="text" name="télephone" id="télephone" class="form-control"/></br>
            <label>Filliére</label></br>
            <select name="filliere" id="filliere"  class="form-control">
                <option value="Developpement digital">Developpement digital</option>
                <option value="réseaux informatique">réseaux informatique</option>
            </select></br>
             
            <label>Groupe</label></br>
            <select name="groupe" id="groupe"  class="form-control">
                <option value="DEVA">DEVA</option>
                <option value="DEVB">DEVB</option>
                <option value="DEVC">DEVC</option>
                <option value="RIA">RIA</option>
                <option value="RIB">RIB</option>
                <option value="RIC">RIC</option>
            </select> </br>
            <input type="submit" value="Enregistrer" class="btn btn-info">

    </div>







</div>
@stop