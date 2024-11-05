@extends('layouts.master')

@section('content')
<div class="col-12">
    <h4 class="text-center text-danger mb-4">RATE STYLE</h4>

    <div class="row d-flex mb-4">
        <div class="col-md-6">
            <h5>Rue : 29 - Dagnoen - en face du juvenant saint camille fille</h5>
            <p>Tél : 76838737 / 79310587 / 62003939 </p>
        </div>
        <div class="col-md-6 w-100">
            <h4 class="text-center">Mesure N° {{$finds->id}} </h4>
        </div>
    </div>

    <div class="col-12 d-flex mb-4" style="border-bottom: 1px solid black;">
        <div class="col-6">
            <h5>Nom du client : <span class="text-danger">{{$finds->Client->nom}} {{$finds->Client->prenom}}</span></h5>
        </div>
        <div class="col-6">
            <h5>Date mesure : <span class="text-danger">{{$finds->date}}</span></h5>
        </div>
    </div>

    <div class="col-12 d-flex p-1" style="border-bottom: 1px solid black;">
        <div class="col-3">
            <p>Epaule : {{$finds->epaule}}</p>
        </div>
        <div class="col-3">
            <p>Poitrine : {{$finds->poitrine}}</p>
        </div>
        <div class="col-3">
            <p>Long manche : {{$finds->lng_manche}}</p>
        </div>
        <div class="col-3">
            <p>Tour manche : {{$finds->tour_manche}}</p>
        </div>
    </div>
    <div class="col-12 d-flex p-1" style="border-bottom: 1px solid black;">
        <div class="col-3">
            <p>Long chemise : {{$finds->lng_chemise}}</p>
        </div>
        <div class="col-3">
            <p>Ceinture : {{$finds->ceinture}}</p>
        </div>
        <div class="col-3">
            <p>Bassin : {{$finds->bassin}}</p>
        </div>
        <div class="col-3">
            <p>Cuisse : {{$finds->cuisse}}</p>
        </div>
    </div>
    <div class="col-12 d-flex p-1" style="border-bottom: 1px solid black;">
        <div class="col-3">
            <p>Poignet : {{$finds->poignet}}</p>
        </div>
        <div class="col-3">
            <p>Long pantalon : {{$finds->lng_pantalon}}</p>
        </div>
        <div class="col-3">
            <p>Tour taille : {{$finds->tour_taille}}</p>
        </div>
        <div class="col-3">
            <p>Long taille : {{$finds->long_taille}}</p>
        </div>
    </div>
    <div class="col-12 d-flex p-1" style="border-bottom: 1px solid black;">
        <div class="col-3">
            <p>Genoux : {{$finds->genoux}}</p>
        </div>
        <div class="col-3">
            <p>Bas : {{$finds->bas}}</p>
        </div>
        <div class="col-3">
            <p>Col : {{$finds->col}}</p>
        </div>
        <div class="col-3">
            <p>Long camisole : {{$finds->lng_camisole}}</p>
        </div>
    </div>
    <div class="col-12 d-flex p-1" style="border-bottom: 1px solid black;">
        <div class="col-3">
            <p>Dos : {{$finds->dos}}</p>
        </div>
        <div class="col-3">
            <p>Pince : {{$finds->pince}}</p>
        </div>
        <div class="col-3">
            <p>Frappe : {{$finds->frp}}</p>
        </div>
        <div class="col-3">
            <p>Long robe : {{$finds->long_robe}}</p>
        </div>
    </div>
    <div class="col-12 d-flex p-1" style="border-bottom: 1px solid black;">
        <div class="col-3">
            <p>Long jupe : {{$finds->log_jupe}}</p>
        </div>
    </div>

    <button type="button" class="btn btn-info m-5">Imprimer</button>
</div>
@endsection
