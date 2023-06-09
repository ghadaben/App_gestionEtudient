@extends('adminlte::page')
@section('title')
Modifier les information des Etudients
@endsection
@section('content')
<div class="container">
<div class="card-body">
    @foreach ($Etudients as $etud)
        <form action="{{url('/home/'.$etud->idEtudient)}}" method="POST">
            @csrf
            @method("PATCH")
            <label>idEtudient</label>
            <input type="text" name="idEtudient" id="idEtudient" class="form-control" value="{{$etud->idEtudient}}" /></br>
            <label>nom</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{$etud->nom}}" /></br>
            <label>prenom</label>
            <input type="text" name="prenom" id="prenom" class="form-control" value="{{$etud->prenom}}" /></br>
            <label>Date de naissance</label>
            <input type="date" name="dateNaissance" id="dateNaissance" class="form-control" value="{{$etud->dateNaissance}}" /></br>
            <label>Téléphone</label>
            <input type="text" name="télephone" id="télephone" class="form-control" value="{{$etud->télephone}}" /></br>
            <label>Filliére</label>
            <select name="filliere" id="filliere"  class="form-control" value="{{$etud->filliere}}">
                        <option value="Developpement digital">Developpement digital</option>
                        <option value="réseaux informatique">réseaux informatique</option>
            </select></br>
            <label>Groupe</label>
            <select name="groupe" id="groupe"  class="form-control" value="{{$etud->groupe}}">
                        <option value="DEVA">DEVA</option>
                        <option value="DEVB">DEVB</option>
                        <option value="DEVC">DEVC</option>
                        <option value="RIA">RIA</option>
                        <option value="RIB">RIB</option>
                        <option value="RIC">RIC</option>
            </select></br>
            <input type="submit" value="Modifier" class="btn btn-info"/>
        
        </form>
    @endforeach
</div>
</div>

@stop