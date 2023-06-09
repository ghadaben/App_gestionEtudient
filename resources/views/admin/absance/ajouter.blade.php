@extends('adminlte::page')
@section('title')
Créér une nouvelle Etudient
@endsection
@section('content')
<div class="container">
    <h3 style="position:relative">Remplissez le formulaire</h3>
    <div class="card-body">
        <form action="{{url('home/show/crud/ajouter')}}" method="post">
            @csrf
            <label>id</label></br>
            <input type="text" name="idEtudient" id="idEtudient" class="form-control"/></br>
            <label>Date début</label></br>
            <input type="date" name="datedébut" id="datedébut" class="form-control"/></br>
            <label>Date Fin</label></br>
            <input type="date" name="datefin" id="datefin" class="form-control"/></br>
            <label>Nombre des heures</label></br>
            <input type="number" name="nombreheurs" id="nombreheurs" class="form-control"/></br>
            <label>Justifier</label></br>
            <select name="justifier" id="justifier"  class="form-control">
                <option value="oui">oui</option>
                <option value="non">non</option>
            </select> </br>
            <label>Cause d'absance</label></br>
            <select name="causedabsance" id="causedabsance"  class="form-control">
                <option value="Accident">Accident</option>
                <option value="Maladie">Maladie</option>
                <option value="Autre raison">Autre raison</option>
            </select> </br>
            <label>Absance en</label></br>
            <select name="absanceen" id="absanceen"  class="form-control">
                <option value="Cour Adistancet">Cour Adistance</option>
                <option value="Cour présentiel">Cour présentiel</option>
            </select> </br>
            <input type="submit" value="ajouter absance" class="btn btn-info">

    </div>







</div>
@stop