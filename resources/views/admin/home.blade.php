<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@extends('adminlte::page')
@section('title')
admin
@endsection
@section('content')
<div class="container">
            <h3 style="position:relative">Gestion des Etudients</h3> 
          <a href="{{url('/home/create')}}" class="btn btn-info mb-5" style="position:absolute;top:65px;right:125px;"> 
                        <i class="bi bi-plus-circle-dotted"></i>
          </a>  
            <table class="table table-striped table-bordered" style="margin-bottom:100px;">
                <thead>
                    <tr style="background-color:#435d7d;">   
                        <th colspan="12" class="text-light" style="font-size:25px;"> Liste des Etudients
                       </th>
                    </tr>
                    <tr>
                        <th>id</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date de naissance</th>
                        <th>Téléphone</th>
                        <th>Fillière</th>
                        <th>Groupe</th>
                        <th colspan="3">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Etudients as $item)
                    <tr>
                        <td>{{$item->idEtudient}}</td>
                        <td>{{$item->nom}}</td>
                        <td>{{$item->prenom}}</td>
                        <td>{{$item->dateNaissance}}</td>
                        <td>{{$item->télephone}}</td>
                        <td>{{$item->filliere}}</td>
                        <td>{{$item->groupe}}</td>
                        <td class="text-centre">
                            <a href="{{url('/home/' .$item->idEtudient)}}" class="btn btn-secondary">
                            <i class="bi bi-eye-fill"></i>
                        
                        </a>
                        </td>
                        <td class="text-centre">
                            <a href="{{url('/home/' .$item->idEtudient . '/edit')}}" class="btn btn-primary">
                            <i class="bi bi-pencil-square" ></i>
                        
                        </a>
                        </td>
                    <form method="POST" action="{{url('/home' . '/' . $item->idEtudient)}}">
                        @method("DELETE")
                        @csrf
                        <td class="text-center" >
                            <button type="submit" class="btn btn-danger" onclick='return confirm("est-ce que vous êtes sur de supprimer cette étudiante?")'>
                            <i class="bi bi-x-circle"></i>
                            </button>
                        </td>
                    </form>
                    </tr>
                @endforeach
                </tbody>

           </div>

            
@endsection
