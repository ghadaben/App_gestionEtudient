@extends('adminlte::page')
@section('title')
les informations d'un Etudient
@endsection
@section('content')
<div class="container">

    @foreach($Etudients as $etud)
    <a href="{{url('/home/show/crud/'. $etud->idEtudient)}}" class="btn btn-danger">Absance</a>
<h3 style="position:relative">123</h3>
<div class="card-body">
<label>id</label><br/>
<input type="text"name="idEtudient"id="idEtudient"class="form-control"  value="{{$etud->idEtudient}}"></br>
<label>Nom</label><br/>
<input type="text"name="nom"id="nom"class="form-control"  value="{{$etud->nom}}"></br>
<label>Prénom</label><br/>
<input type="text"name="prenom"id="prenom"class="form-control"  value="{{$etud->prenom}}"></br>
<label>Date de Naissance</label><br/>
<input type="text"name="dateNaissance"id="dateNaissance"class="form-control"  value="{{$etud->dateNaissance}}"></br>
<label>Téléphone</label><br/>
<input type="text"name="télephone"id="télephone"class="form-control"  value="{{$etud->télephone}}"></br>
<label>Filliére</label><br/>
<input type="text"name="filliere"id="filliere"class="form-control"  value="{{$etud->filliere}}"></br>
<label>Groupe</label><br/>
<input type="text"name="groupe"id="groupe"class="form-control"  value="{{$etud->groupe}}"></br>
</form>
</div>
    @endforeach
</div>


@stop