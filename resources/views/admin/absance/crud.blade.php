<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@extends('adminlte::page')
@section('title')
admin
@endsection
@section('content')
<div class="container">
            <h3 style="position:relative">absance</h3> 
            @foreach ($Etudient as $item)
                
            <a href="{{url('home/show/crud/'.$item->idEtudient.'/ajouter')}}" class="btn btn-info mb-5" style="position:absolute;top:65px;right:125px;"> 
                        <i class="bi bi-plus-circle-dotted"></i> ajouter
            </a>  
            @endforeach
            <table class="table table-striped table-bordered" style="margin-bottom:100px;">
                <thead>
                    <tr style="background-color:#435d7d;">   
                        <th colspan="12" class="text-light" style="font-size:25px;"> Liste d'absance
                       </th>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <th>IdEtudient</th>
                        <th>Date début</th>
                        <th>Date Fin</th>
                        <th>Nombre des heures</th>
                        <th>Justifier</th>
                        <th>Cause d'absance</th>
                        <th>Absance en</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @empty(!$absance)
                @foreach($absance as $item)
                <tr>
                        
                        <td>{{$item->idEtudient}}</td>
                        <td>{{$item->datedébut}}</td>
                        <td>{{$item->datefin}}</td>
                        <td>{{$item->nombreheurs}}</td>
                        <td>{{$item->justifier}}</td>
                        <td>{{$item->causedabsance}}</td>
                        <td>{{$item->absanceen}}</td>
                        <td >
                            <a href="#"></a>
                        </td>
                    </tr>
                @endforeach
                @endempty
                </tbody>
            </table>
                   

           </div>

            
@endsection
